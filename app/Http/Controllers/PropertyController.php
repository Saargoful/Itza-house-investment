<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyImage;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('dashboard', compact('properties'));
    }
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('dashboard')->with('success', 'Propiedad eliminada correctamente.');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'property_type' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
            'type'=>'nullable|string',

            'rooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'amenities' => 'nullable|string',
            'location' => 'nullable|string',
            'land_area' => 'nullable|integer',
            'construction_area' => 'nullable|integer',
        ]);
    
        $property = Property::create($validatedData);
    
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('property_img', 'public');
                $images[] = $path;
            }
            $property->update(['images' => $images]);
        }
    
        return redirect()->route('dashboard')->with('success', 'Property added successfully.');
    }
    


public function update(Request $request, $id)
{
   
    $property = Property::findOrFail($id);

   
    $data = $request->only([
        'title',
        'description',
        'price',
        'property_type',
        'type',
        'rooms',
        'bathrooms',
        'amenities',
        'location',
        'land_area',
        'construction_area'
    ]);

   
    $property->update(array_filter($data));

  
    return redirect()->route('properties.edit', $id)->with('success', 'Propiedad actualizada con éxito');
}


public function show($id)
{
    $property = Property::findOrFail($id);
    
    return view('Verproperty', compact('property'));
}


}