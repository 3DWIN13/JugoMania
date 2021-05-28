<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('jugomania-vista');
});*/

Route::resource('/', 'App\Http\Controllers\JugosController');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['role:admin']], function (){
    Route::get('/dashboard/productos', [ProductController::class, 'index'])->name('dashboard.productos');
    Route::post('/dashboard/productos/store', [ProductController::class, 'store'])->name('dashboard.productos.store');
    Route::put('/dashboard/productos/{id}/update', [ProductController::class, 'update'])->name('dashboard.productos.update');
    Route::delete('/dashboard/productos/{id}/delete', [ProductController::class, 'destroy'])->name('dashboard.productos.delete');
});

Route::group(['middleware' => ['role:admin']], function (){
    Route::get('/dashboard/roles', [RolesController::class, 'index'])->name('dashboard.roles');
    Route::post('/dashboard/roles/store', [RolesController::class, 'store'])->name('dashboard.roles.store');
    Route::post('/dashboard/roles/{roleId}/assign', [RolesController::class, 'assign'])->name('dashboard.roles.assign');
    Route::post('/dashboard/roles/{roleId}/remove', [RolesController::class, 'remove'])->name('dashboard.roles.remove');
    Route::delete('/dashboard/roles/{roleId}/delete', [RolesController::class, 'destroy'])->name('dashboard.roles.delete');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
