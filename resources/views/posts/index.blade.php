<!DOCTYPE html>
<html>
<head>
	<title>articles</title>
</head>
<body>
	<h1>bienvenue sur les articles</h1>
	<a href="{{ route('post.create') }}" title="créer un article">créer un article</a>
	<ul>
		@foreach($posts as $post)
			<li>
				<a href="{{ route('post.show', $post->id) }}" title="{{ $post->name }}">{{ $post->name }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>