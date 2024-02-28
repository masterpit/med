<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\relation_view;
use App\Models\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $post = Post::all();
        $sum_post = count($post);
        return view('Admin.home', compact('sum_post'));
    }
    public function upload(Request $request)
    {
        $img_path = $request->file('file')->store('uploads','public');
        return response()->json(['location'=>"/storage/$img_path"]);
    }
    public function tasks()
    {
        $r_views = relation_view::all();
        $views = view::all();
        $posts = Post::all();
        return view('Admin.tasks_view', compact('views','r_views', 'posts'));
       
    }
}