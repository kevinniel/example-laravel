<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
</head>
<body>
	<h1>Modification d'un article</h1>
	<form method="post" action="{{ route('post.update', $post->id) }}">
		@csrf
		@method('PUT')
		<input type="text" name="name" value="{{ $post->name }}">
		<textarea name="content">{{ $post->content }}</textarea>
		<select name="category_id">
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
		<button type="submit">envoyer</button>
	</form>
</body>
</html>