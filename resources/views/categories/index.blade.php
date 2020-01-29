<!DOCTYPE html>
<html>
<head>
	<title>categories</title>
</head>
<body>
	<h1>bienvenue sur les catégories</h1>
	<a href="{{ route('category.create') }}" title="créer une catégorie">créer une catégorie</a>
	<ul>
		@foreach($categories as $category)
			<li>
				<a href="{{ route('category.show', $category->id) }}" title="{{ $category->name }}">{{ $category->name }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>