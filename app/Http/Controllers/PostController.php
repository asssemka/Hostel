<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');

    }

    public function store(Request $request) : RedirectResponse{

        $post = new Post();
        $post->name = $request->input('name');
        $post->city = $request->input('city');
        $post->star = $request->input('star');
        $post->image = $request->input('image');


        $post->save();

        //return redirect('/index');

        return redirect()->route('index');

    }
    public function index(){
        $posts = new Post();
        return view('posts', ['posts' => $posts->all()]);
    }

}
