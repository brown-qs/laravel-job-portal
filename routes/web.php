<?php

use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//public routes
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/job/{job}', [PostController::class, 'show'])->name('post.show');
Route::get('employer/{employer}', [CompanyController::class, 'show'])->name('company.employer');

//return vue page
Route::get('/search', [JobController::class, 'index'])->name('job.index');

Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
Route::put('company/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::post('company', [CompanyController::class, 'store'])->name('company.store');
Route::get('company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::delete('company', [CompanyController::class, 'destroy'])->name('company.destroy');
