@extends('layouts.admin_layout')
@section('title')
@endsection('title')
@section('content')
    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
        <thead>
            <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">посты
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                    aria-label="Browser: activate to sort column ascending">страница</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                    aria-label="Platform(s): activate to sort column ascending">статус</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                    aria-label="Engine version: activate to sort column ascending" style="">Engine version</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="">CSS grade</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr class="odd parent">
              <td>
                {{$post->name}}
                  <input type="hidden" name='view' value="{{$post->id}}">
              </td>
                <td class="dtr-control sorting_1" tabindex="0" style="">           
                  <select class="form-control" id="name" name="name" aria-label="Default select example">
                    @foreach ($views as $view)
                        <option value="{{ $view->id }}">{{$view->id."-".$view->name }}</option>
                    @endforeach
                </select>            
                </td>
                
                <td>Win 98+ / OSX.2+</td>
                <td style="">1.7</td>
                <td style="">A</td>
            </tr>
          @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th rowspan="1" colspan="1">посты</th>
                <th rowspan="1" colspan="1">страница</th>
                <th rowspan="1" colspan="1">статус</th>
                <th rowspan="1" colspan="1" style="">Engine version</th>
                <th rowspan="1" colspan="1" style="">CSS grade</th>
            </tr>
        </tfoot>
    </table>
@endsection
