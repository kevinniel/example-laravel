<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view("posts.index", compact('posts'));
    }

    public function show($postId)
    {
    	$post = Post::with('category')->find($postId);
    	return view("posts.show", compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
		return view("posts.create", compact('categories'));
    }

    public function store(Request $request)
    {
    	$post = new Post();
    	$post->name = $request->get('name');
        $post->content = $request->get('content');
        $post->category_id = $request->get('category_id');
    	$post->save();

    	return redirect()->route('post.index');
    }

    public function edit($postId)
    {
    	$post = Post::find($postId);
    	return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $postId)
    {
    	$post = Post::find($postId);
    	$post->name = $request->get('name');
        $post->content = $request->get('content');
        $post->category_id = $request->get('category_id');
    	$post->save();
		return redirect()->route('post.index');
    }

    public function delete($postId)
    {
    	$post = Post::find($postId);
    	$post->delete();
    	return redirect()->route('post.index');
    }
}
