<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\relation_view;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function about(){
        $about = relation_view::where('view_id','1')->first();        
        $post = Post::find($about->Post_id);
        
        return view('tasks.about',compact('post'));
    }
    public function specialists(){
        
    }
    public function services(){
        return view('tasks.services');
    }
    public function for_patient(){
        return view('tasks.for_patient');
    }
    public function appointment(){
        
    }
    public function contacts(){
        
    }
}
