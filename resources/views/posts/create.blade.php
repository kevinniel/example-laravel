<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
</head>
<body>
	<h1>creation d'un article</h1>
	<form method="post" action="{{ route('post.store') }}">
		@csrf
		<input type="text" name="name">
		<textarea name="content"></textarea>
		<select name="category_id">
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
		<button type="submit">envoyer</button>
	</form>
</body>
</html>