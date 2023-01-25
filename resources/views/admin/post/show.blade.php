@extends('layouts.app')

@section('content')
<div><a href="{{ route('admin.posts.index')}}">Go Back</a></div>
<div class="card" style="width:400px">
    <div class="card-body">
      <h2 class="card-title">{{$singlePost->name}}</h2>
      <p class="card-text">{{$singlePost->description}}</p>
    </div>
  </div>
@endsection