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
  {!!$post->text!!}   
</div>

@endsection
