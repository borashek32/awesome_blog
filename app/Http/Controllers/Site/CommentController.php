<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function add(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $request->get('post_id');
        $comment->body = $request->input('body');
        $comment->save();

        return back()->with('success', 'Your comment was successfully added to the post');
    }
}
