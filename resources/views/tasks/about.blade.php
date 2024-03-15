@extends('layouts.app')
@section('style')
    <style>
        .galery {
            width: 100%;
        }
    </style>
@endsection('style')
@section('content')
<div class="container">
    @foreach ($posts as $post)
    <h3>{{$post->name}}</h3>
    <br>
    {!!$post->text!!}  
    @endforeach
   
</div>

@endsection
