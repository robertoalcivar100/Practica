<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EquiposForm;
use App\Http\Livewire\JugadoresForm;


Route::get('/', function () {
    return view('welcome');
});

Route::get('equipos', function () {
    return view('equipos.index');
});

Route::get('jugadores', function () {
    return view('jugadores.index');
});

Route::any('equipos/form', EquiposForm::class)->name('equipos.form');
Route::any('jugadores/form', JugadoresForm::class)->name('jugadores.form');
