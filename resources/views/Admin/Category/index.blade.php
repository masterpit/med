@extends('layouts.admin_layout')
@section('title')
    все категорий
@endsection('title')
@section('content')
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Категорий
                </th>
                
                
                <th style="width: 30%">
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($Categories as $Category)
        <tr>
          <td>
              {{$Category->id}}
          </td>
          <td>
              <a>
                {{$Category->title}}
              </a>
              <br>
              <small>
                  {{$Category->cteated_at}}
              </small>
          </td>
          
          
          <td class="project-actions text-right">
              
              <a class="btn btn-info btn-sm" href="{{route('Category.edit',$Category)}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <form action="{{route('Category.destroy',$Category)}}"  method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </button>
              </form>
          </td>
      </tr>
    
        @endforeach
            
            
        </tbody>
    </table>
@endsection
