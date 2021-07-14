<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $products = Product::withCount('ratings')->latest();
        if(request('search'))
        {
            $products->where('name','like',"%".request('search')."%")
                ->orWhere('short_description','like',"%".request('search')."%");
        }
        return view('site.pages.search',[
            'products' => $products->paginate(4)
        ]);
    }
}
