<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



require __DIR__.'/auth.php';



Route::get('/property', function () {
    return view('property');
});

Route::get('/', function () {
    return view('new-index');
});


Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/property-single', function () {
    return view('property-single');
});
Route::get('/busqueda', function () {
    return view('busqueda');
});


Route::get('/edit', function () {
    return view('Editproperty');
});
Route::get('/view', function () {
    return view('Verproperty');
});


// PARA ENVIAR EL CORREO ELECTRONICO (CONTACT)

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// PARA ENVIAR EL CORREO ELECTRONICO (CONTACT)




Route::get('/dashboard', [PropertyController::class, 'index'])->name('dashboard');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
Route::get('/properties/{id}', [PropertyController::class, 'show']);
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

Route::resource('properties', PropertyController::class);
Route::put('/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');



// web.php
use App\Http\Controllers\PropertyListingController;

Route::get('/property-list', [PropertyListingController::class, 'index'])->name('property.index');

// web.php
Route::get('/property-single/{id}', [PropertyListingController::class, 'show'])->name('properties.show');
Route::get('/properties/search', [PropertyListingController::class, 'search'])->name('properties.search');
Route::get('/properties', [PropertyListingController::class, 'index'])->name('properties.index');
Route::get('/properties/{id}', [PropertyListingController::class, 'show'])->name('properties.show');
Route::post('/validate-title', [PropertyListingController::class, 'validateTitle'])->name('validate.title');

// web.php
Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');


use App\Http\Controllers\EditpropertyController;

// Ruta para mostrar el formulario de edición
// web.php

Route::get('/edit/{id}', [EditpropertyController::class, 'edit'])->name('properties.edit');

// Ruta para actualizar la propiedad
Route::put('/properties/{id}', [EditpropertyController::class, 'update'])->name('properties.update');

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('properties.view');

Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');


// web.php
Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
