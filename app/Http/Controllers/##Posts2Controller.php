<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post2;
class PostsController extends Controller
{
    public function index(){
    	$posts = Post2::latest()->get();
    	// dd($posts->toArray());
    	return view('posts2.index')->with('posts',$posts);
    }


	public function show(Post $post){
	// $post = Post2::findOrFail($id);
	return view('posts2.show')->with('post',$post);
}


}