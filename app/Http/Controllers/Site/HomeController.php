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


    	$featuredProducts = Product::withCount('ratings')->where('featured',true)->latest()->take(7)->get();


    	$newArrivalCategory  = Category::whereSlug('new-arrivals')->get()->first();

        
    	$onsaleTodayProducts = Category::whereSlug('on-sale-only-today')->get()->first()
                                ->products()
                                // ->with(['media','tag'])
                                ->withCount('ratings')
                                ->take(8)->get(); 

		$featuredCategories = 	Category::with(['products' => function($query) {
				$query->where('products.featured',1);
		},'media'])->where('featured',1)->get();
      



    	return view('site.home',compact( 'sliders','newArrivalCategory', 'featuredCategories','featuredProducts','onsaleTodayProducts'));

    }


    // public function contact()
    // {
    //     return view('site.pages.contact');
    // }

    // public function faq()
    // {
    //     return view('site.pages.faq');
    // }
}
