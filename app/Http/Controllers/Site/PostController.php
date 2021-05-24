<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::where([
            'status'     => 'active'
        ])
            ->orderBy('id', 'DESC')
            ->paginate(9);

        $posts->withPath('/posts');

        return view('blog.posts', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('blog.one-post', compact('post'));
    }
}
