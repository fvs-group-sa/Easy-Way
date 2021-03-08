<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('admin.posts',[
            'posts'=>$posts
        ]);
    }

    public function newPostIndex()
    {

        return view('admin.addPost');
    }

    public function store(Request $request)
    {
         
        $this->validate($request, [
            'body' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destination_path = 'public/images/products';
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->extension();
        $path = $request->file('image')->storeAs($destination_path, $imageName);
          
        // $request->user()->   you can use this to grab the current authenticated user as well
        
        // you can use this if you want to
        $posts = new Post([
            //Larvel will automatically fill in user_id
            'body'=>$request->body,
            'title'=>$request->title,
            'image'=>$imageName
        ]);

        $posts->save();

        return redirect('admin');
    }

    public function editPost(Post $post)
    {
        $posts = post::find($post);

        return view('admin.editpost',[
            'posts'=>$posts
        ]);
    }

    public function update(Request $request, $post)
    {
        $post = post::find($post);
        $post->title = $request->title;
        $post->image = $request->image;
        $post->body = $request->body;
        $post->save();

        return redirect('admin'); 
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
