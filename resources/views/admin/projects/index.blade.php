@extends('layouts/app')

@section('content')
    
    <section>

        @foreach ($projects as $project)            

        <div class="project">
            <div class="left">

                <a href="">
                    <img src="{{$project->url_img}}" alt="Project IMG">
                </a>

            </div>

            <div class="right">

                <h2>{{$project->title}}</h2>

                <p>{{$project->description}}</p>

            </div>
        </div>

        @endforeach
    </section>

@endsection