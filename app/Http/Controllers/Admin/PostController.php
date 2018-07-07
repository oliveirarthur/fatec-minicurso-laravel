<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function form($id = null)
    {
        $post = Post::findOrNew($id);
        return view('admin.post.form', [
            'post' => $post,
        ]);
    }

    public function save(Request $request, $id = null)
    {
        $post = Post::findOrNew($id);
        $post->fill($request->input());
        
        if ($post->save()) {
            return redirect(url('/admin/posts'));
        }

        return back()->withInput();
    }

    public function list()
    {
        $posts = Post::withTrashed()->get();
        return view('admin.post.list', [
            'posts' => $posts,
        ]);
    }

    public function delete($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch(\Exception $e) {
            return back()->with('message', 'Post não encontrado para exclusão');
        }
        
        if ($post->delete()) {
            return redirect('/admin/posts');
        }

        return back()->with('message', 'Erro ao excluir o post #'.$id);
    }
    
}
