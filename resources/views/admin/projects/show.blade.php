@extends('layouts/app')

@section('content')
    
    <div class="main pt-5">
        <h1>{{$project->title}}</h1>
        <hr>
        <p>{{$project->description}}</p>
        <hr>
        <p>{{$project->url_img}}</p>
    </div>

@endsection