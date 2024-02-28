<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

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
Route::get('/', [App\Http\Controllers\publicController::class, 'about'])->name('about');
Route::get('/specialists', [App\Http\Controllers\SpecialistController::class, 'index'])->name('specialists');
Route::get('/services', [App\Http\Controllers\publicController::class, 'services'])->name('services');
Route::get('/for_patient', [App\Http\Controllers\publicController::class, 'for_patient'])->name('for_patient');
Route::get('/appointment', [App\Http\Controllers\publicController::class, 'appointment'])->name('appointment');
Route::get('/contacts', [App\Http\Controllers\publicController::class, 'contacts'])->name('contacts');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('/admin-panel', [HomeController::class, 'home'])->middleware('auth')->name('admin_home');
Route::get('/tasks_view', [HomeController::class, 'tasks'])->middleware('auth')->name('tasks');
Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts_index');
Route::resource('Category',CategoryController::class);
Route::resource('Post',PostController::class);

Route::post('/upload',[HomeController::class,'upload'])->name('upload_img');//tinymce