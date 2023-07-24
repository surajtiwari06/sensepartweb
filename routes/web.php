<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/staffing', function () {
    return view('services.staffing');
})->name('staffing'); 


Route::get('/iot', function () {
    return view('services.iot');
})->name('iot'); 

Route::get('/ai_ml', function () {
    return view('services.aiml');
})->name('ai_ml'); 

Route::get('/di_bi', function () {
    return view('services.dibi');
})->name('di_bi'); 
Route::get('/softwaretesting', function () {
    return view('services.softwaretesting');
})->name('softwaretesting'); 
Route::get('/nabl', function () {
    return view('services.nabl');
})->name('nabl'); 

Route::get('/software', function () {
    return view('services.software');
})->name('software'); 


Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/resume_parser', function () {
    return view('resume_parser');
})->name('resume_parser');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

// Route::resource('contact', [ContactController::class, 'store'])->name('contact.submit');
Route::resource('contact', ContactController::class);

//blog

// Route::get('/blog', function () {
//     return view('blog.blog');
// })->name('blog'); 

// Route::get('/blog_detail', function () {
//     return view('blog.blog_detail');
// })->name('blog_detail'); 
// Route for listing all posts
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');