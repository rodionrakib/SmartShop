<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use App\Models\Attribute;
use Attribute as GlobalAttribute;

class AttributeValueController extends Controller
{

    public function getValues(Request $request)
    {
        $attributeId = $request->get('id');
        $attribute = Attribute::findOrFail($attributeId);

        return $attribute->values;
        return $values;
        return response()->json($values);
    }


    public function addValues(Request $request)
    {
        $value = new AttributeValue();
        $value->attribute_id = $request->get('id');
        $value->value = $request->get('value');
        $value->price = $request->get('price');
        $value->save();
        return response()->json($value);
    }

    public function updateValues(Request $request)
    {
        $attributeValue = AttributeValue::findOrFail($request->get('valueId'));
        
        $attributeValue->attribute_id = $request->get('id');
        $attributeValue->value = $request->get('value');
        $attributeValue->price = $request->get('price');
        
 
        $attributeValue->save();

        return response()->json($attributeValue);
    }

    // public function deleteValues(Request $request)
    // {
    //     $attributeValue = AttributeValue::findOrFail($request->get('id'));
    //     $attributeValue->delete();
    //     return response()->json(['status' => 'success', 'message' => 'Attribute value deleted successfully.']);
    // }













    public function index(Request $request,Attribute $attribute)
    {
        
        return response()->json($attribute->values);

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
    public function store(Request $request, Attribute $attribute)
    {
        // validate 
        $attribute->values()->create([

            'value' => $request->value,
            'price' => $request->has('price') ? $request->price: 0  
        ]);

        return response()->json([],201);;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeValue $attributeValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeValue $attributeValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttributeValue $attributeValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute,AttributeValue $value)
    {
        $value->delete();
        return response()->json(['status' => 'success', 'message' => 'Attribute value deleted successfully.']);

    }
}
