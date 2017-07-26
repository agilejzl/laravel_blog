<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
  public function index(){
    $user = session('user');
    // $posts = $user->posts;
    $posts = User::find($user['id'])->posts;
    // Log::info($user);

    return view('admin.posts.index', ['posts' => $posts]);
  }

  public function show($id){
    return view('admin.posts.show', ['post' => Post::findOrFail($id)]);
  }

  public function create(){
    $post = new Post;
    return view('admin.posts.create', ['post' => $post]);
  }

  public function edit($id){
    return view('admin.posts.edit', ['post' => Post::findOrFail($id)]);
  }

  public function update(Request $request, $id){
    $post = Post::findOrFail($id);
    $user = session('user');
    $category_name = $request->get('category_name');
    $category = $user->categories()->where('name', $category_name)->first();
    if (empty($category)) {
      $category = $user->categories()->create([
        'name' => $category_name,
      ]);
    }

    $hash_post = array_merge($request->get('post'),
      ['user_id' => $user['id'],
      'category_id' => $category->id]
    );
    $post->update($hash_post);
    return view('admin.posts.show', ['post' => $post]);
  }

  public function destroy($id){
    $post = Post::findOrFail($id);
    Post::destroy($post->id);
    return redirect('/admin/posts');
  }

  public function store(Request $request){
    $user = session('user');
    $category_name = $request->get('category_name');
    $category = $user->categories()->where('name', $category_name)->first();
    if (empty($category)) {
      $category = $user->categories()->create([
        'name' => $category_name,
      ]);
    }

    $hash_post = array_merge($request->get('post'),
      ['user_id' => $user['id'],
      'category_id' => $category->id]
    );
    $post = Post::create($hash_post);
    return redirect('/admin/posts/'.$post->id);
  }
}
