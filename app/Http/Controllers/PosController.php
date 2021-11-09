<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pos;

class PosController extends Controller
{
	public function index()
	{
		return view('post', [
        "title" => "Post",
        "post" => Pos::all()
    ]);
 
	}

	public function show($slug)
	{
		  return view('pos', [
        "title" => "Single Pos",
        "pos" => Pos::find($slug)
    ]);
	}
}