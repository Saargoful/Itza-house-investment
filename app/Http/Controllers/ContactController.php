<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CantactanosMailable;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100|regex:/^[A-Za-z\s]+$/',
            'telefono' => 'required|numeric|digits_between:8,12',
            'email' => 'required|email|max:100',
            'mensaje' => 'required|string|max:1000',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.regex' => 'El campo nombre solo puede contener letras y espacios.',
            'nombre.max' => 'El campo nombre no puede tener más de 100 caracteres.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.numeric' => 'El campo teléfono debe ser numérico.',
            'telefono.digits_between' => 'El campo teléfono debe tener entre 8 y 12 dígitos.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'Debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El campo email no puede tener más de 100 caracteres.',
            'mensaje.required' => 'El campo mensaje es obligatorio.',
            'mensaje.max' => 'El campo mensaje no puede tener más de 1000 caracteres.',
        ]);
    
        
        Mail::to("salomongomez987@gmail.com")->send(new CantactanosMailable($request->all()));
    
 
        return redirect()->route('contact.index')->with("info", "Mensaje enviado, muchas gracias");
    }
    
    


    // public function store(Request $request)
    // {
    //                            return $request->all();

    //     $request->validate([
    //         'nombre' => 'required|string|max:100|regex:/^[A-Za-z\s]+$/',
    //         'telefono' => 'required|string|max:12',
    //         'email' => 'required|email|max:100',
    //         'mensaje' => 'required|string|max:1000',
            
    //     ]);

    
    //     Mail::to("salomongomez987@gmail.com")->send(new CantactanosMailable($request->all()));


    //     Session::flash('info', 'Mensaje enviado');

    //     return redirect()->route('contact.store')->with("info", "Mensaje enviado, muchas gracias");

    //     Mail::to("salomongomez987@gmail.com")->send(new CantactanosMailable($request->all()));
    //     return "Mensaje enviado";
    // }
    public function index()
    {
        return view('contact');

    }
    
}

