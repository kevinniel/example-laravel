<!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
	<h1>bienvenue sur l'article {{ $post->name }}</h1>
	<div>
		nom dela catégorie : {{ $post->category->name }}
	</div>
	<div>
		{{ $post->content }}
	</div>
	<a href="{{ route('post.index') }}" title="retour a la liste">retour a la liste</a>
	<a href="{{ route('post.edit', $post->id) }}" title="modifier">modifier</a>
	<a href="{{ route('post.delete', $post->id) }}" title="supprimer">supprimer</a>
</body>
</html>