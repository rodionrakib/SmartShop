<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function show()
    {
    	if(Cart::count() <= 0 )
    	{
    		return redirect()->route('home');
    	}
        return view('site.pages.checkout');

    }


    // store order 
    public function store(Request $request)
    {


    	$request->validate([
    		'phone_number' => 'required',
    		'address' => 'required',
    		'full_name' => 'required'

    	]);

		$order = Order::create([
	        'order_number'      =>  'ORD-'.strtoupper(uniqid()),
	        'status'            =>  'pending',
	        'grand_total'       =>  Cart::totalFloat(),
	        'item_count'        =>  Cart::count(),
	        'payment_status'    =>  0,
	        'full_name'        =>  	$request->full_name,
	        'phone_number'      =>  $request->phone_number,
	        'address'      		=>  $request->address,
	        'notes'             =>  $request->has('note') ? $request->note : null ,
	        'user_id'           => auth()->check() ? auth()->id() : null ,
	        'email' => $request->has('email') ? $request->email : ''
	    ]);

	    if ($order) {

	        $items = Cart::content();

	        foreach ($items as $item)
	        {
	            // A better way will be to bring the product id with the cart items
	            // you can explore the package documentation to send product id with the cart
	            $product = $item->model;

	            $orderItem = new OrderItem([
	                'product_id'    =>  $product->id,
	                'quantity'      =>  $item->qty,
	                'price'         =>  $item->price
	            ]);

	            $order->items()->save($orderItem);
	        }
	    }

	    Cart::destroy();
	    
	    return redirect()->route('success');
    }
}
