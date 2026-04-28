<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', function(){
    return view('contacts.create');
});


Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{contact}', [ContactController::class, 'detail'])->name('contacts.detail');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [ContactController::class, 'delete'])->name('contacts.delete');
