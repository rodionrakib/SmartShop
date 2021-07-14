<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Tag;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $brands = Brand::all();
        return view('admin.products.create',compact('categories','brands','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'name'      =>  'required|max:255',
            'sku'       =>  'required',
            'price'     =>  'required|regex:/^\d+(\.\d{1,2})?$/',
            'special_price'  => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'  =>  'required|numeric',
            'brand_id' => 'required|exists:brands,id',
            'short_description' => 'required'
        ]);
        
        $product = Product::create([
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'sku' => $request->sku,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'price' => $request->price ,
            'special_price' => $request->special_price ,
            'status' => $request->has('status') ,
            'featured' => $request->has('featured') ,
            'weight' => $request->has('weight') ? $request->weight : 0 ,
            'tag_id' => $request->has('tag_id') ? $request->tag_id : null ,

        ]);


        $categoryIds = $request->get('categories');

        

        if($request->has('categories'))
        {
            $product->categories()->attach($categoryIds);
        }



        return redirect()->route('admin.products.edit',['product' => $product->id])->with( 'message','Product Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
         $tags = Tag::all();
        return view('admin.products.edit',compact('product','categories','brands','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name'      =>  'required|max:255',
            'sku'       =>  'required',
            'price'     =>  'required|regex:/^\d+(\.\d{1,2})?$/',
            'special_price'     =>  'regex:/^\d+(\.\d{1,2})?$/',
            'quantity'  =>  'required|numeric',
        ]);
        
        $product->update([

            'name' => $request->name,
            'sku' => $request->sku,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'weight' => $request->has('weight') ? $request->weight : 0 ,
            'price' => $request->has('price') ? $request->price : 0 ,
            'special_price' => $request->special_price ,
            'status' => $request->has('status') ,
            'featured' => $request->has('featured') ,
            'brand_id' => $request->brand_id,
            'tag_id' => $request->tag_id

        ]);

        if($request->has('categories'))
        {
            $product->categories()->sync($request->get('categories'));
        }



        // if($request->hasFile('thumbs'))
        // {
        //     foreach ($request->file('thumbs') as $file) 
        //     {
        //         $product->addMedia($file)->toMediaCollection('thumb');

        //     }
        // }

        // if($request->hasFile('cover'))
        // {
        //     $product->removeCover();
        //     $product->addCover($request->file('cover'));
        // }

        return redirect()->route('admin.products.index')->with( 'message','Product Update Successfully');

    }


    public function uploadImages(Request $request,Product $product)
    {

        if($request->hasFile('image'))
        {
            $product->addMedia($request->file('image'))->toMediaCollection();

        }

        return response()->json(['status' => 'Success']);


    }


    public function deleteImage(Media $media)
    {
        $media->delete();
        return back()->with('message','Image Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('Product Deleted Successfully');
    }
}
