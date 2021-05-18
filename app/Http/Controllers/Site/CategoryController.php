<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;




class CategoryController extends Controller
{
    public function show($slug1,$slug2 = null, $slug3 = null)
    {
    	if($slug3){$slug = $slug3;}
    	elseif ($slug2) {$slug = $slug2;}
    	else{$slug = $slug1;}

    	$category = Category::where('slug', $slug)->first();
    	$breadCrumb = $category->getBreadcrumb();
    	$products = $category->products()->paginate(8);
	    return view('site.pages.category', compact('category','products','breadCrumb')); 

    }
}
