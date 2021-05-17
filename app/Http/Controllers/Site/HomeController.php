<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function show()
    {
        $sliders = Slider::where('status',1)->get();


    	$featuredProducts = Product::where('featured',true)->latest()->take(10)->get();

    	$newArrivalCategory  = Category::whereSlug('new-arrivals')->get()->first();


    	$onsaleTodayProducts = Category::whereSlug('on-sale-only-today')->get()->first()->products()->take(8)->get(); 


		$featuredCategories = 	Category::with(['products' => function($query) {
				$query->where('products.featured',1);
		}])->where('featured',1)->get();

        // AL LEAST 1 Product is Needed In the Featured Category ...


    	return view('site.home',compact( 'sliders','newArrivalCategory', 'featuredCategories','featuredProducts','onsaleTodayProducts'));
    }
}
