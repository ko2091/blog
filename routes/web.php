<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('hello', 'HelloController@index'); // ->middleware('auth');
Route::post('hello', 'HelloController@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

Route::get('/about', 'aboutcontroller@index');


Route::get('hello/other','HelloController@other');


Route::get('keijiban','PostController@index');
Route::post('keijiban','PostController@post');

Route::get('person','PersonController@index');
Route::get('person/add','PersonController@add');
Route::get('person/edit','PersonController@edit');
Route::post('person/add','PersonController@create');
Route::post('person/edit','PersonController@update');
Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');

//addにpostされてきたものがある時、createが起動
Route::post('board','BoardController@create');
//addにアクセスするとaddアクション起動
Route::get('board/add','BoardController@add');
//ミドルウェアで認証ボードにアクセスでインデックスアクション起動
Route::get('board','BoardController@index')->middleware('auth');
//session
Route::get('board/session','BoardController@ses_get');
Route::post('board/session','BoardController@ses_put');
Route::get('logout','BoardController@logout');

Route::get('my','MyController@index');
Route::get('my/add','MyController@add');
Route::post('my/add','MyController@create');

Route::get('hello/rest','HelloController@rest');

Route::resource('rest','RestappController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ここからpost
Route::get('/', 'PostsController@index')->middleware('auth');
// Route::get('/posts/{id}', 'PostsController@show');
//したの{post}には数字しか入らない,postにはIDがはいる
Route::get('/posts/{post}', 'PostsController@show')->where('post','[0-9]+');
Route::get('/posts/create','PostsController@create');
// /postsに送られてきたフォームからのPOSTはストアアクションで保存される
// このページには表示が何もなく、このページに行くとストアアクションのリダイレクトで/に行く
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}/edit','PostsController@edit');
Route::patch('/posts/{post}','PostsController@update');
Route::delete('/posts/{post}','PostsController@destroy');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::delete('/posts/{post}/comments/{comment}','CommentsController@destroy');


// これ以降どうでもいい
Route::get('/posts/json',function(){
  return App\post::all();
});
Route::get('/posts/json2',function(){
  return App\board::all();
 });
Route::get('posts/json3',function(){
  return Request::all();
});
Route::get('/posts/logout','PostsController@logout');


Route::get('/test','PostsController@testindex');
Route::post('/test','PostsController@post');
