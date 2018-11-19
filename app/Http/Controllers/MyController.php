<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class MyController extends Controller
{
    //

    public function index(Request $request)
    {

    	$items = Board::all();
    	return view('my.index',['$items' => $items]);
    }
}
