@extends('layouts.master')

@section('content')

    @if(!$projects->count())
        You have no projects
    @else
        @foreach($projects as $project)
            <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
        @endforeach
    @endif

@endsection