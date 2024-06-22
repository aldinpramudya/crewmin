<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RoleController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing-page');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'adminIndex'])->name('admin');

    // ROUTE PEGAWAI
    Route::get('/admin/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('admin-pegawai');
    Route::get('/admin/pegawai/create', [App\Http\Controllers\PegawaiController::class, 'create'])->name('admin-pegawai-create');
    Route::post('/admin/pegawai/store', [App\Http\Controllers\PegawaiController::class, 'store'])->name('admin-pegawai-store');
    Route::get('/admin/pegawai/edit/{id}', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('admin-pegawai-edit');
    Route::put('/admin/pegawai/update/{id}', [App\Http\Controllers\PegawaiController::class, 'update'])->name('admin-pegawai-update');
    Route::delete('/admin/pegawai/delete/{id}', [App\Http\Controllers\PegawaiController::class, 'destroy'])->name('admin-pegawai-delete');

    // ROUTE ROLE
    Route::get('/admin/role', [App\Http\Controllers\RoleController::class, 'index'])->name('admin-role');
    Route::get('/admin/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('admin-role-create');
    Route::post('/admin/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('admin-role-store');
    Route::get('/admin/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('admin-role-edit');
    Route::put('/admin/role/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('admin-role-update');
    Route::delete('/admin/role/delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('admin-role-delete');

});
