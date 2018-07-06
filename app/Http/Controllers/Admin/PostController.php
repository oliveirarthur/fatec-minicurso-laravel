<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function form()
    {
        return view('admin.post.form');
    }

    public function save(Request $request)
    {
        $post = Post::create($request->input());
        dd($post->toArray());
    }
}
