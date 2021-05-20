<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attribute;


class ProductController extends Controller
{
    public function show($slug)
    {
    	$product = Product::with('ratings')->where('slug', $slug)->first();

    	$attributes = Attribute::all();

    	$breadCrumb = $product->getBreadcrumb();

    	$images = $product->getMedia();

   //  	$related = Product::whereNotIn('id', [$product->id])
			// ->inRandomOrder()
			// ->limit(10)
			// ->get();
		// dd($related);

    	return view('site.pages.product',compact('product','attributes','images','breadCrumb'));
    }
}
