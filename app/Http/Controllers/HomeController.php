<?php

namespace App\Http\Controllers;
use File;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function postforblog(){
//        dd("working");
        $posts = Post::get();
//        dd($posts);
        return view('posts.bloglist', ['posts'=>$posts]);
//        return view('posts.bloglist');
    }




    public function postd($id){
        $posts = Post::findOrFail($id);
//        dd($posts);
//       dd($posts);
        return view('posts.blog', ['posts'=>$posts]);
//        return view('posts.bloglist');
    }
}
