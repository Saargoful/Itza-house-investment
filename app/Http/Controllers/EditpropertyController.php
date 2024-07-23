<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class EditpropertyController extends Controller
{
    
    // public function edit($id)
    // {
    //     $property = Property::findOrFail($id);
    //     return view('editproperty', compact('property'));
    // }

    //    public function update(Request $request, $id)
    // {
       
    //     $validatedData = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'price' => 'required|numeric',
    //         'property_type' => 'required|string',
    //         'type' => 'nullable|string',
            
    //         'rooms' => 'nullable|numeric',
    //         'bathrooms' => 'nullable|numeric',
    //         'amenities' => 'nullable|string',
    //         'location' => 'nullable|string',
    //         'land_area' => 'nullable|numeric',
    //         'construction_area' => 'nullable|numeric',
    //     ]);

      
    //     $property = Property::findOrFail($id);

      
    //     $property->update($validatedData);

      
    //     return redirect()->route('properties.edit', $id)->with('success', 'Propiedad actualizada con éxito');
    // }
//     public function update(Request $request, $id)
// {
//     // Encuentra la propiedad por ID o lanza una excepción si no existe
//     $property = Property::findOrFail($id);

//     // Filtra los datos recibidos en la solicitud
//     $data = $request->only([
//         'title',
//         'description',
//         'price',
//         'property_type',
//         'type',
//         'rooms',
//         'bathrooms',
//         'amenities',
//         'location',
//         'land_area',
//         'construction_area'
//     ]);

//     // Actualiza la propiedad solo con los campos que están presentes en la solicitud
//     $property->update(array_filter($data));

//     // Redirige a la vista de edición de la propiedad con un mensaje de éxito
//     return redirect()->route('properties.edit', $id)->with('success', 'Propiedad actualizada con éxito');
// }

//         public function destroy($id)
//         {
//             $property = Property::findOrFail($id);
//             $property->delete();

//             return redirect()->route('properties.index')->with('success', 'Propiedad eliminada correctamente.');
//         }

public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('editproperty', compact('property'));
    }

    // Método para actualizar los datos de la propiedad
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

        return redirect('/dashboard')->with('success', 'Propiedad actualizada con éxito');
    }

    // Método para eliminar una propiedad
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('/dashboard')->with('success', 'Propiedad eliminada correctamente.');
    }
}
