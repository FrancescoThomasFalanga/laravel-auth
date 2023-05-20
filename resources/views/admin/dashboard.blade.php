@extends('layouts/admin')

@section('content')

    <div class="container">

            <h1 class="text-shadow">
                Hey, I'm Francesco
            </h1>

            <p>A Full Stack Web Developer</p>

            <button>
                <a href="{{route('admin.projects.index')}}">PROJECTS</a>
            </button>

    </div>

@endsection