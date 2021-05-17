<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{

    public function orderNow(Request $request)
    {


        $product = Product::findOrFail($request->id);

        Cart::add($product,1);

        return redirect()->route('cart.index');

    }




    public function dashboard()
    {
    	return view('account.dashboard');
    }

    public function wishlist()
    {
    	$products = auth()->user()->paginatedWishes(5)->withPath(route('wishlist'));

    	return view('account.wishlist',compact('products'));

    }

    public function details()
    {
    	return view('account.account-details');	
    }


    public function orders()
    {
        $orders = auth()->user()->orders()->paginate(10);


        return view('account.account-orders',compact('orders')); 

    }



    public function update(Request $request)
    {



        $data = $request->only(['name','email','phone_number','address']);

        if($request->has('password') && $request->password != null)
        {
            $data['password'] = Hash::make(trim($request->password));
        }
        auth()->user()->update($data);

        return redirect()->back();

    }


    
}
