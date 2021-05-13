<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', [NoteController::class, 'index'])->name('note.index');
Route::get('notes/{note}', [NoteController::class, 'show'])->name('note.show');
Route::get('notes/create', [NoteController::class, 'create'])->name('note.create');
Route::post('notes/store', [NoteController::class, 'store'])->name('note.store');
Route::get('notes/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::post('notes/store/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('notes/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
