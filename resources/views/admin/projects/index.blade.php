@extends('layouts.admin')
@section('content')

@foreach ($projects as $project)
    <p>TITLE: {{$project->title}}</p>
    <p>CONTENT: {{$project->content}}</p>
    <p>DEAD LINE: {{$project->deadline->format("d-m-Y")}}</p>
    <div>
        <img src="{{$project->image}}" alt="">
    </div>
    <a href="{{route('admin.projects.show', $project)}}">Deteils</a>
    <hr>
@endforeach

@endsection