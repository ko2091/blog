@extends('layouts.default')

<!-- このページではフォームからの値をPOStで/POSTsに返してるだけ、コントローラもこのページ表示のみ -->

@section('title','New post')

@section('content')
<h1>
  <!-- indexに戻る -->
  <a href="{{ url('/')  }}" class="header-menu">Back</a>
  New Post
</h1>

<form method="post" action="{{ url('/posts') }} ">
{{ csrf_field() }}
<p>
  <!-- タイトルのフォーム -->
	<input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
  <!-- エラー処理 -->
	@if($errors->has('title'))
	<span class="error">{{ $errors->first('title') }} </span>
	@endif
</p>

<p>
  <!-- 中身のフォーム -->
	<textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
	@if ($errors->has('body'))
	<span class="error">{{ $errors->first('body') }}</span>
	@endif
</p>
<p>
	<input type="submit" name="Add">
</p>
</form>

@endsection
