@extends('layouts/admin')

@section('content')
    



    <section>
    
        <Button class="add-project">
            <a href="{{route('admin.projects.create')}}">
                Add a Project TO The List
            </a>
        </Button>

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

                <button>
                    <a href="{{route('admin.projects.show', $project->slug)}}">View Project</a>
                </button>

            </div>
        </div>

        @endforeach
    </section>

@endsection