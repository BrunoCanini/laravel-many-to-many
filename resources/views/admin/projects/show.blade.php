@extends('layouts.admin')
@section('content')

<h1>PROJECT: {{ $project->title }}</h1>
<p>CONTENT: {{ $project->content }}</p>
<p>DEAD LINE: {{ $project->deadline }}</p>
<p>CATEGORY: {{ $project->category ? $project->category->name : "Senza categoria" }}</p>
<ul>
    @foreach($project->technologys as $technology)
    <li>{{$technology->name}}</li>
    @endforeach
</ul>
<div>
    <img src="{{ asset(" /storage/".$project->image) }}" alt="{{$project->image}}">
</div>

@endsection