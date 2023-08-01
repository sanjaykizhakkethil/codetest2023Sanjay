<?php

use App\Models\Blog;
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

// Route::group([ 'middleware' => 'adminauth'], function()
// {
    //All the routes that belongs to the group goes here
//     Route::get('admin', [HomeController::class, 'dashboard'])->name('admin');  
// });
   
Route::get('/', function () {
    $blogs = Blog::get();

    return view('index',compact('blogs'));
});


Route::get('/blog', function () {
    $blogs = Blog::get();

    return view('blog',compact('blogs'));
});
Route::post('/add-blog',  [App\Http\Controllers\BlogController::class, 'create'])->name('add-blog');
Route::get('editblog/{id}',  [App\Http\Controllers\BlogController::class, 'edit'])->name('editblog');
Route::post('updateblog/{id}',  [App\Http\Controllers\BlogController::class, 'update'])->name('updateblog');
Route::get('delete/{id}',  [App\Http\Controllers\BlogController::class, 'destroy'])->name('delete');

Route::get('/blog_details', function () {
    $blogs = Blog::first();
    return view('blog_detail',compact('blogs'));
});
Route::get('/blog_details/{id}',  [App\Http\Controllers\BlogController::class, 'blog_details']);
