@extends('layouts.app')
@section('style')
    
@endsection('style')
@section('content')

@foreach ($specialists as $specialist)
    <div class="card mb-3" >
    <div class="row g-0">
      <div class="col-lg-2" style="min-height: 80px">
        <img src="..."  alt="...">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">{{$specialist->user->name}}</h5>
          <p class="card-text">{{$specialist->speciality->name}}</p>
          <p class="card-text"><small class="text-muted">стаж (лет) {{$specialist->experience}}</small></p>
        </div>
      </div>
      <div class="col-md-3">
        отзывы
      </div>
    </div>
  </div>
@endforeach
   
@endsection


