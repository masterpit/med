@extends('layouts.admin_layout')
@section('title')
    все посты
@endsection('title')
@section('content')

    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    посты
                </th>
                <th style="width: 20%">
                    категория
                </th>
                <th style="width: 8%" class="text-center">
                    Статус
                </th>
                <th style="width: 30%">
                </th>
            </tr>
        </thead>
        <tbody>
            @if (isset($Posts))
           
                @foreach ($Posts as $Post)
                    <tr>
                        <td>
                            {{ $Post->id }}
                        </td>
                        <td>
                            <a>
                                {{ $Post->name }}
                            </a>
                            <br>
                            <small>
                                {{ $Post->cteated_at }}
                            </small>
                        </td>
                        <td>
                            {{ $Post->category->title }}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('Post.show',$Post)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
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
                        </td>
                    </tr>
                @endforeach
            @endif



        </tbody>
    </table>
@endsection
