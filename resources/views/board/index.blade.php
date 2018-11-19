@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
<!-- //Authチェックでログイン確認 -->
    @if (Auth::check())
    <!-- //ログインしてたらユーザの名前とメアド表示 -->
    <p>USER: {{$user->name . '(' . $user->email . ')' }}</p>
    <a href="/logout">ログアウト</a>
    @else
    <p>ログインしていません <a href="/login">ログイン</a>
        <a href="/register">登録</a></p>

    @endif
    <table>
    <tr><th>Message</th><th>Name</th></tr>

    @foreach ($items as $item)
        <tr>
            <td>{{$item->message}}</td>
            <!-- リレーションでアイテムと連携しているパーソンの名前を表示、つまり、
          boardのデータベーステーブルのIDとパーソンのテーブルのIDが同じやつをくっつけてる -->
            <td>{{$item->person->name}}</td>

        </tr>
    @endforeach
     </table>
      <!-- 下はペジネーション -->
    {{ $items->links() }}

    <a href="http://localhost:8888/board/add">投稿ページへ</a>
    <a href="http://localhost:8888/my">ホームへ戻る</a>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
