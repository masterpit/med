@extends('layouts.admin_layout')
@section('title')
<div class="row">
    <div class="col">
        Пост {{$Post->name}}
    </div>
    <div class="col">
        <a class="btn btn-info btn-sm" href="{{ route('Post.edit', $Post) }}">
            <i class="fas fa-pencil-alt">
            </i>
            Edit
        </a>
        <form action="{{ route('Post.destroy', $Post) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="fas fa-trash">
                </i>
                Delete
            </button>
        </form>
    </div>
</div>
    
    
@endsection('title')
@section('content')
<div class="border-top pt-2" >
   {!!$Post->text!!} 
</div>


@endsection
