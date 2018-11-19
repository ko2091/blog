@extends('layouts.default')

@section('title', $post->title)

@section('content')
<h1>
  <!-- インデックスに戻る -->
  <a href="{{ url('/') }}" class="header-menu">Back</a>

  {{ $post->title }}
</h1>
<p>{!! nl2br(e($post->body)) !!}</p>

<h2>Comments</h2>
<ul>
  @forelse ($post->comments as $comment)
  <li>
    {{ $comment->body }}
    <a href="#" class="del" data-id="{{ $comment->id }}">[x]</a>
    <!-- デリートする -->
    <form method="post" action="{{ action('CommentsController@destroy', [$post, $comment]) }}" id="form_{{ $comment->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  <!-- 何もコメントなければ -->
  @empty
  <li>No comments yet</li>
  @endforelse

</ul>
<!-- ストアに送るフォーム -->
<form method="post" action="{{ action('CommentsController@store', $post) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="enter comment" value="{{ old('body') }}">
    <!-- エラー処理 -->
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>

  <p>
    <input type="submit" value="Add Comment">
  </p>
</form>
<!-- js読み込み -->
<script src="/js/main.js"></script>
@endsection
