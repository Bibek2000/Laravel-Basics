<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // tag
Route::prefix('backend/tag')->name('backend.tag.')->controller(\App\Http\Controllers\Backend\TagController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');

});
// Category
Route::prefix('backend/category')->name('backend.category.')->controller(\App\Http\Controllers\Backend\CategoryController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');

});

//Sub-Category
Route::prefix('backend/subcategory')->name('backend.subcategory.')->controller(\App\Http\Controllers\Backend\SubcategoryController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});

//brand
Route::prefix('backend/brand')->name('backend.brand.')->controller(\App\Http\Controllers\Backend\Brandcontroller::class)->group(function(){
    //route to get data to delete
   Route::get('/trash','trash')->name('trash');
   //route to post data through id to restore
   Route::post('/restore/{id}','restore')->name('restore');
   //route to delete data through id
   Route::delete('/force_delete/{id}','permanentDelete')->name('force_delete');
   //route create
    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});

//product
Route::prefix('backend/product')->name('backend.product.')->controller(\App\Http\Controllers\Backend\ProductController::class)->group (function(){
    Route:: get('/trash','trash')->name('trash');
    Route:: post('/restore/{id}','restore')->name('restore');
    Route:: delete ('/force_delete/{id}','permanentDelete')->name('force_delete');


    Route::get('/create','create')->name('create');
    Route:: post('','store')->name('store');
    Route::get('','index')->name('index');
    Route:: get('/{id}','show')->name('show');
    Route:: delete('/{id}','destroy')->name('destroy');
    //route to edit data
    Route:: get('/{id}/edit','edit')->name('edit');
    //route to update data
    Route:: put('/{id}','update')->name('update');
});
