<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AttributeTranslation;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::orderBy('created_at', 'desc')->get();
        return view('backend.product.attribute.index',compact('attributes'));
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
    public function store(Request $request)
    {
        $attribute = new Attribute;
        $attribute->name = $request->name;
        $attribute->value = $request->value;
        $attribute->save();

        $attribute_translation = AttributeTranslation::firstOrNew(['attribute_id' => $attribute->id]);
        $attribute_translation->name = $request->name;
        $attribute->value = json_encode($request->value);
        $attribute_translation->save();

        return redirect()->route('attributes.index')->with('success','Attribute has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute = Attribute::findOrFail($id);
        return view('backend.product.attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attribute = Attribute::findOrFail($id);
        $attribute->name = $request->name;
        $attribute->value = $request->value;
        $attribute->save();

        $attribute_translation = AttributeTranslation::firstOrNew(['attribute_id' => $attribute->id]);
        $attribute_translation->name = $request->name;
        $attribute_translation->save();

        return redirect()->route('attributes.index')->with('success','Attribute has Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute = Attribute::findOrFail($id);

        foreach ($attribute->attribute_translations as $key => $attribute_translation) {
            $attribute_translation->delete();
        }

        Attribute::destroy($id);
        return redirect()->route('attributes.index')->with('success','Attribute has been deleted successfully');
    }
}
