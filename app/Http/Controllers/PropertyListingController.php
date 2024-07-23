<?php

namespace App\Http\Controllers;
use App\Models\Property; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PropertyListingController extends Controller
{public function index()
    {
        $propiedades = Property::paginate(6);
        return view('property', compact('propiedades'));
    }
    public function showPropertySingle($id)
    {
    $propiedad = Property::findOrFail($id);
    return view('property-single', compact('propiedad'));
    }

public function show($id)
{
    $propiedad = Property::findOrFail($id);
    return view('property-single', compact('propiedad'));
}

public function destroy($id)
{
    $property = Property::findOrFail($id);
    $property->delete();

    return redirect()->route('properties.index')->with('success', 'Propiedad eliminada correctamente.');
}



}
