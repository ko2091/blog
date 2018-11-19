@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
    <tr><th>Message</th><th>Name</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->message}}</td>
            <td>{{$item->person->name}}</td>
        </tr>
    @endforeach
    </table>
    {{ $items->links() }}
    <a href="http://localhost:8888/board/add">投稿ページへ</a>
    <a href="http://localhost:8888/my">ホームへ戻る</a>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
