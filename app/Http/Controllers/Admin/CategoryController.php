<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CategoryController extends Controller
{
    

    public function index()
    {
        $categories = Category::all();
        
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::visible()->get()->toTree();

        $categories = Category::get()->toTree();


        return view('admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate 

        
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);

        // $data = $request->except(['parent','cover']);
        
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'featured' => $request->has('featured') ? 1: 0,
            'menu' => $request->has('menu') ? 1: 0
        ]);


        if($request->has('parent') && ($request->get('parent') != null))
        {

            $request->validate(['parent' => 'exists:categories,id']);
            
            $parent = Category::find($request->get('parent'));
            
            $parent->appendNode($category);



        }  

        if($request->hasFile('cover'))
        {
            $category->addCover($request->file('cover'));
        }

        return redirect()->route('admin.categories.index')->with('message', 'Category created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::get()->toTree();
        return view('admin.categories.edit',[

            'categories' => $categories,
            'targetCategory' => $category
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'featured' => $request->has('featured') ? 1: 0,
            'menu' => $request->has('menu') ? 1: 0
        ]);
        

        if (request()->hasFile('cover'))
        {
            if($category->hasMedia('cover'))
            {
                $category->removeCover();
                
            }
            $category->addCover($request->file('cover'));

        }

        if ($request->has('parent')) {
            
            $request->validate(['parent' => 'exists:categories,id']);

            $parent = Category::find($request->get('parent'));
            dd($parent);

            $parent->appendNode($category);

        }
        

        return redirect()->route('admin.categories.index')->with('message', 'Category updated');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('message', 'Delete successful');

    }
}
