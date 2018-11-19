@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    <table>
      <!-- /////formでboardにpostしている -->
    <form action="/board" method="post">
       {{ csrf_field() }}
       <!-- わざわざIDを指定しなくてもログインしている人のPERSON_IDで投稿する -->
       <!-- <tr><th>person id: </th><td><input type="number" name="person_id"></td></tr> -->
       <tr><th>title: </th><td><input type="text" name="title"></td></tr>
       <tr><th>message: </th><td><input type="text" name="message"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
       <!-- <tr><th>tel</th><td><input type="tel" value=""></td></tr> -->

    </form>
    </table>

      <a href="http://localhost:8888/board">投稿一覧へ</a>
@endsection

@section('footer')

copyright 2017 tuyano.
@endsection
