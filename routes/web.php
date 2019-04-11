<?php

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
    return view('blog\index');
});

Route::get('/post',function(){
   return view('blog\post');
});

Route::get('/post/{id}',function($id){
    return view('blog\post',['id'=>$id]);
})->name('post_name');

Route::get('/admin',function(){
    return view('admin\index');
})->name('admin_page');

Route::get('admin/create',function(){
    return view('admin\create');
})->name('admin_create');
