<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtotal = Cart::subtotal();
        $total = Cart::total();
        return view('site.pages.cart',compact('total','subtotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                

        $options = $request->except(['id','quantity', 'action','_token']) ;


        $product = Product::findOrFail($request->id);


        Cart::add($product,$request->quantity,$options);

        if($request->action == 'add_to_cart')
        {
            return redirect()->route('cart.index')->with('message', 'Add to cart successful');

        }

        if($request->action == 'buy_now')
        {
            return redirect()->route('checkout.show')->with('message', 'Add to cart successful');

        }

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $items = $request->products;

        foreach ($items as $rowId => $quantity) 
        {
            Cart::update($rowId,$quantity);
        }
        return redirect()->route('cart.index')->with('message', 'Cart Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('cart.index')->with('message', 'Removed to cart successful');

    }

    public function shipping()
    {
        return view('site.pages.shipping');
    }
}
