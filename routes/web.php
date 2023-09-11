<?php

use App\Livewire\DeletedWorkers;
use App\Livewire\ShowTrabajador;
use App\Livewire\ListTrabajadors;
use App\Livewire\CreateTrabajador;
use App\Livewire\DeleteTrabajador;
use App\Livewire\ListUniformidads;
use App\Livewire\UpdateTrabajador;
use App\Livewire\UpdateUniformidad;
use App\Livewire\CreateUniformidads;
use Illuminate\Support\Facades\Route;
use App\Livewire\ForceDeleteTrabajador;
use App\Http\Controllers\RolesController;
use App\Livewire\AsignUniformidadToTrabajador;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\UsersController;

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




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/trabajador/create', CreateTrabajador::class)->name('create-trabajador');
    Route::get('/trabajador/list', ListTrabajadors::class)->name('list-trabajadors');
    Route::get('/uniformidad/create', CreateUniformidads::class)->name('create-uniformidad');
    Route::get('/uniformidad/list', ListUniformidads::class)->name('list-uniformidads');
    Route::get('/asignUniformidadTrabajador', AsignUniformidadToTrabajador::class)->name('asign-uniformidad');
    Route::get('/trabajador/{id}', ShowTrabajador::class)->name('show-trabajador');
    Route::get('/trabajador/{id}/update', UpdateTrabajador::class)->name('update-trabajador');
    Route::get('/trabajador/{id}/delete', DeleteTrabajador::class)->name('delete-trabajador');
    Route::get('/uniformidad/{id}/update', UpdateUniformidad::class)->name('update-uniformidad');
    Route::delete('/trabajador/{id}/force-delete', ForceDeleteTrabajador::class)->name('trabajador-force-delete');
    Route::get('/trabajador/list/deleted', DeletedWorkers::class)->name('trabajadors-deleted');
});

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    // Route::get('/register', 'RegisterController@show')->name('register.show');
    // Route::post('/register', 'RegisterController@register')->name('register.perform');

    // /**
    //  * Login Routes
    //  */
    // Route::get('/login', 'LoginController@show')->name('login.show');
    // Route::post('/login', 'LoginController@login')->name('login.perform');

});

Route::group(['middleware' => ['auth', 'permission']], function() {
    /**
     * Logout Routes
     */
    // Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', [UsersController::class, 'index'])->name('users.index');
            Route::get('/create', [UsersController::class, 'create'])->name('users.create');
            Route::post('/create', [UsersController::class, 'store'])->name('users.store');
            Route::get('/{user}/show', [UsersController::class, 'show'])->name('users.show');
            Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
            Route::patch('/{user}/update', [UsersController::class, 'update'])->name('users.update');
            Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });