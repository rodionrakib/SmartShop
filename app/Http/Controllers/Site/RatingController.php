<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class RatingController extends Controller
{
    public function store(Request $request,Product $product)
    {

    	$rating = $request->rating;
    	$message = $request->message;
    	$name = $request->full_name;

    	// $name = auth()->user()->name;
    	$review = $product->rate($rating,$name,$message);

    	$html = view('site.partials.rating')->with('review',$review)->render();

    	return response()->json([
    		'message' => 'success',
    		'review' => $html
    	]);

    	



    	// return 'created';
    }

    public function getBody()
    {
       
    }
}
