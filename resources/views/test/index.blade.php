@extends('layouts.default')

@section('title', 'testpage')

@section('content')
<form method="post" action="/test">
{{ csrf_field() }}
  <input name="text" type="title" placeholder="title utikome">

   <input type="submit" name="bottun">
</form>

@isset($post)

{{ $post->title }}

@else
<p>nanikakake</p>
@endisset

@endsection
