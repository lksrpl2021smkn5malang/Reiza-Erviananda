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
    return view('Home', [
    	"title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    	"title" => "About",
    	"name" => "Reiza Erviananda",
    	"email" => "Rey_rza12@gmail.com",
    	"image" => "reiza.jpg"
    ]);
});



Route::get('/blog', function () {
	$blog_post = [
	[
		"title" => "HEY YOU!",
		"author" => "Reiza Erviananda",
		'body' => "Hello! Welcome to my blog"
	],
    ];

    return view('post', [
    	"title" => "Post",
    	"post" => $blog_post
    ]);
});