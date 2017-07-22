<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
  public function index(){
    // $posts = session('user')->posts;
    $posts = Post::all();
    // Log::info(session('user'));

    return view('admin.posts.index', ['posts' => $posts]);
  }

  public function show($id){
    return view('admin.posts.show', ['post' => Post::findOrFail($id)]);
  }
}
