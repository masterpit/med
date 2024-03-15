<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\relation_view;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function about(){
               
        $posts = Post::where('view_id','4')->get();
        //dd( $about->Post_id);
        return view('tasks.about',compact('posts'));
    }
    public function specialists(){
        
    }
    public function services(){
        $posts = Post::where('view_id','2')->get();
        return view('tasks.services',compact('posts'));
    }
    public function for_patient(){
        return view('tasks.for_patient');
    }
    public function appointment(){
        
    }
    public function contacts(){
        
    }
}
