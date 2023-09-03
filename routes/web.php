<?php

use App\Livewire\ListTrabajadors;
use App\Livewire\CreateTrabajador;
use App\Livewire\ListUniformidads;
use App\Livewire\CreateUniformidads;
use Illuminate\Support\Facades\Route;
use App\Livewire\AsignUniformidadToTrabajador;
use App\Livewire\ShowTrabajador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trabajador/create', CreateTrabajador::class)->name('create-trabajador');
Route::get('/trabajador/list', ListTrabajadors::class)->name('list-trabajadors');
Route::get('/uniformidad/create', CreateUniformidads::class)->name('create-uniformidad');
Route::get('/uniformidad/list', ListUniformidads::class)->name('list-uniformidads');
Route::get('/asignUniformidadTrabajador', AsignUniformidadToTrabajador::class)->name('asign-uniformidad');
Route::get('/trabajador/{id}', ShowTrabajador::class)->name('show-trabajador');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});