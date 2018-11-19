




<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<header>掲示板サイト</header>
	<h1>様々なテーマについて自由にコメントすることができるサイトです</h1>
	<li>テーマを選択してください</li>
	
    
	@foreach($items as $items)
		<tr>
			<td>{{$items->title}}
		</tr>
	@endforeach
	<!-- <a href="http://localhost:8888/board">投稿一覧へ</a> -->

	<!-- <a href="boardController@index">投稿ページへ</a> -->
</body>
</html>

