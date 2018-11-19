@extends('layouts.helloapp')

@section('title', 'session')

@section('menubar')
    @parent
  sessionpage
@endsection

@section('content')
    <table>
    <p>{{ $session_data }}</p>
    <form action="/board/session" method="post">
       {{ csrf_field() }}
       <input type="text" name="input">
       <input type="submit" value="send">
    </form>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
