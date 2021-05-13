<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;



class AttributeController extends Controller
{
    public function create()
    {
    	return view('admin.attributes.create');
    }

    public function index()
    {
    	$attributes = Attribute::all();
    	return view('admin.attributes.index',compact('attributes'));

    }

    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.edit', compact('attribute'));

    }


    public function update(Attribute $attribute,Request $request)
    {

     

        $request->validate([

            'name' => 'required',
            'code' => 'required',
            'frontend_type' => 'required'
        ]);


        $attribute->update([

            'name' => $request->name,
            'code' => $request->code,
            'frontend_type' => $request->frontend_type,
            'is_filterable' => $request->has('is_filterable') ? 1 : 0,
            'is_required' => $request->has('is_required') ? 1 : 0,

        ]);

        return redirect()->route('admin.attributes.index')->with('message','Attribute update successful!');
    }



    public function store(Request $request)
    {
    	// validate 

    	Attribute::create([

    		'name' => $request->name,
    		'code' => $request->code,
    		'frontend_type' => $request->frontend_type,
    		'is_filterable' => $request->has('is_filterable') ? 1 : 0,
    		'is_required' => $request->has('is_required') ? 1 : 0,

    	]);


    	return redirect()->route('admin.attributes.index');

    }


    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->route('admin.attributes.index')->with('message','Attribute deleted successfully!');

    }
}
