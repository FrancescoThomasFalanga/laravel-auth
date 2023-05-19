@extends('layouts/app')

@section('content')
    
    <table>

        <thead>

            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Slug</th>
            <th>Comandi</th>

        </thead>

        <tbody>

            @foreach ($projects as $project)
                
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->url_img}}</td>
                <td>{{$project->slug}}</td>
                <td><a href="{{route('admin.projects.show', $project->slug)}}">Mostra</a></td>
            </tr>


            @endforeach

        </tbody>

    </table>

@endsection