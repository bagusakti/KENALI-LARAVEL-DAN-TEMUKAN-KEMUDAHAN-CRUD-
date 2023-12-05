<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get("/", [TaskController::class, 'index'])->name('home');
Route::get("/home/create", [TaskController::class, 'create'])->name('home.create');
Route::post("/home/store", [TaskController::class, 'store'])->name('home.store');
Route::get("/home/edit/{id}", [TaskController::class, 'edit'])->name('home.edit');
Route::put("/home/{id}", [TaskController::class, 'update'])->name('home.update');
Route::delete('/home/{id}', [TaskController::class, 'destroy'])->name('home.destroy');


