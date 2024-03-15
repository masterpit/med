<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\relation_view;
use App\Models\view;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Posts = Post::all();
        //dd($posts);
        return view('Admin.Post.index', compact('Posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories = Category::all();
        $views = view::all();
        return view('Admin.Post.create',compact('Categories','views'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Post = new Post();
        $Post->name = $request->name;
        $Post->text = $request->text;
        $Post->view_id = $request->view;
        $Post->category_id = $request->category;
        $Post->save();
        
        return redirect()->route('Post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $Post = Post::find($post);
        return view('Admin.Post.show', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $Post = Post::find($post);        
        $views = view::all();
        $Categories = Category::all();
        return view('Admin.Post.create',compact('Post','Categories','views'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $Post = Post::find($post);
        $Post->update([
            'name' => $request->name,
            'text' => $request->text,
            'view_id' => $request->view,
            'category_id' => $request->category
        ]);
        return redirect()->route('Post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post = Post::find($post);
        $post_n = 'пост #'.$post->id.'-'.$post->name;
        $post->delete();
        return redirect()->route('Post.index')->with('success',$post_n.' удален');
    }
}
