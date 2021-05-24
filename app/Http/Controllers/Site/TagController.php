<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();

        return view('tags.one-tag', compact('tag'));
    }
}
