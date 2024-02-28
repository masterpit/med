@extends('layouts.admin_layout')
@section('title')
@if (@isset($category))
    Обновить категорию #{{$category->id}}
@else
    Добавить новую категорию
@endif
     
@endsection('title')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">

                <!-- form start -->
                <form method="POST" action=" 
                @if (@isset($category))
                    {{ route('Category.update',$category) }}">
                    @method('PUT')
                @else
                {{ route('Category.store') }} ">
                @endif
                 
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">категория</label>
                            <input type="text" class="form-control" id="title" name="title" 
                            @if (@isset($category))
                                value="{{$category->title}}"
                            @endif    
                            
                                
                            
                                placeholder="введите название категорий">
                        </div>
    
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            @if (@isset($category))
                            обновить
                            @else
                            добавить
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
