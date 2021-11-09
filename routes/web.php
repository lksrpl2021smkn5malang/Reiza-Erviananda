<?php


use App\Models\Pos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;

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



Route::get('/blog', [PosController::class, 'index']); 
	
    


Route::get('post/{slug}', [PosController::class, 'show']); 