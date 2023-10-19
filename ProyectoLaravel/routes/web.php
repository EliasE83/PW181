<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiarioController; //Instruccion para importar el controlador 
 

#   Ruta para Index

// Route::get('/', [DiarioController::class, 'metodoInicio'])->name('apodoInicio');

// Route::view('/', 'welcome')->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

#   Ruta para formulario

// Route::get('/formulario', [DiarioController::class, 'metodoFormulario'])->name('apodoFormulario');

//Route::view('/form', 'formulario')->name('form');
// Route::get('/form', function () {
//     return view('formulario');
// });

#   Ruta para recuerdos

// Route::get('/recuerdos', [DiarioController::class, 'metodoRecuerdos'])->name('apodoRecuerdos');

//Route::view('/memories', 'recuerdos')->name('memories');

// Route::get('/memories', function () {
//     return view('recuerdos');
// });


// Sintaxis de Rutas Agrupadas

Route::controller(DiarioController::class)->group(function (){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formulario', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodoRecuerdos');
});

//Ruta del boton de la vista formulario
Route::post('/guardarRecuerdo',[DiarioController::class, 'guardarRecuerdo'])->name('guardar');