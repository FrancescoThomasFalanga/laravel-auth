@extends('layouts.app')


@section('content')

    <div class="container">

            <h1 class="text-shadow">
                Hey, I'm Francesco
            </h1>

            <p>A Full Stack Web Developer</p>

            <button>
                <a href="{{route('projects.index')}}">PROJECTS</a>
            </button>

    </div>

@endsection