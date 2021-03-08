<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->paginate(10);

        // return view('admin.posts',[
        //     'posts'=>$posts
        // ]);

        return view('admin.settings');
    }
}
