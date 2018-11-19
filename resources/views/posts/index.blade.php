@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">
    New Post
</a>
    @if (Auth::check())
    <p>Hello  <a href="{{ action('PostsController@logout')}}" > logout </a></p>
    @else
    <p>ログインしていません
      <a href="/login">login</a>
      <a href="/register">登録</a>
    </p>
  @endif
  Blog Posts
</h1>

<ul>
  @forelse ($posts as $post)
  <li>
    <!-- forelse文で送られてくる$postをリンクを押したとき一緒にそのメソッドの引数として使えるように値を送っている -->
    <!-- ＄postで送ってるのはpostのIDで、インプリシットバインディング、Post型の変数にすることが使える条件 -->
    <!-- <a href="/posts/{{ $post}}"> {{$post}}</a> -->
    <!-- <a href="{{ url('/posts',$post)}}">{{$post}}</a> -->
    <!-- <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a> -->
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
    <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <li>No posts yet</li>
  @endforelse
  {{ $posts->links() }}
</ul>
<script src="/js/main.js"></script>
@endsection
