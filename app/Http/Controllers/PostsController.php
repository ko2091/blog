<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    public function index(Request $request) {
      //ログインしているユーザ情報を変数に入れている
      $user = Auth::user();

      // $sort = $request->sort;

      // $posts = \App\Post::all();
       // $posts = Post::all();
      // $posts = Post::orderBy('created_at', 'desc')->get();
      //$postsにデータベースのデータを新しい順に変数に代入
      $posts = Post::latest()->Paginate(5);
      // $posts = [];

      // dd($posts->toArray()); // dump dieで値を配列で表示
      // return view('posts.index', ['posts' => $posts]);
      // $param = ['posts'=>$posts ,'sort' => $sort,'user' => $user];
      //posts.indexに$postsを添えて返す
      return view('posts.index')->with('posts',$posts );
    }

    // public function show($id) {
    public function show(Post $post) {
      // $post = Post::find($id);
      // $post = Post::findOrFail($id);
      return view('posts.show')->with('post', $post);
    }

    public function create() {
      return view('posts.create');
    }

    public function store(PostRequest $request){
      //もしくは, $form = $request fill($form) save()でもいい
      $post = new Post();
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function edit(Post $post) {
      return view('posts.edit')->with('post', $post);
    }

    public function update(PostRequest $request, Post $post) {
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function destroy(Post $post) {
      $post->delete();
      return redirect('/');
    }

    public function logout(){
      Auth::logout();
      return redirect('/');
    }
    public function testindex(){
      return view('test.index',['post'=>'']);
    }
    public function post(Post $post){

      return view('test.index',['post'=>$post-title]);
    }

}
