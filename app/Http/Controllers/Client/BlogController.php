<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Post::latest()->paginate(10);

        return view('pages.blog',[
            'blogs'=>$blog
        ]);
    }
}
