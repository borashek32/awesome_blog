<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::where([
            'status' => 'active'
        ])
            ->latest('created_at')
            ->limit(3)
            ->get();

        return view('welcome', compact('posts'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'min:3', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'message'  => ['required', 'string', 'max:500'],
        ]);
    }

    public function submit(Request $data)
    {
        $data = array(
            'name'     => $data->name,
            'email'    => $data->email,
            'message'  => $data->message,
        );

        Mail::to("borashek@inbox.ru")->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message was successfully delivered');
    }
}
