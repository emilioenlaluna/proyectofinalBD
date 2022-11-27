<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/acerca', 'App\Http\Controllers\HomeController@about')->name("home.acerca");
Route::get('/productos', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/producto/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/carrito', 'App\Http\Controllers\CartController@index')->name("carrito.index");
Route::get('/carrito/borrar', 'App\Http\Controllers\CartController@delete')->name("carrito.delete");
Route::post('/carrito/agregar/{id}', 'App\Http\Controllers\CartController@add')->name("carrito.add");

Route::middleware('auth')->group(function () {
    Route::get('/carrito/comprar', 'App\Http\Controllers\CartController@purchase')->name("carrito.comprar");
    Route::get('/mi-cuenta/ordenes', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/productos', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post('/admin/productos/guardar', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/productos/{id}/borrar', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/productos/{id}/editar', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/productos/{id}/actualizar', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
});

Auth::routes();
