@extends('layouts.master')

@section('content')
    <h1>

        <a href="{{ route('projects.show', $project->slug) }}">Back</a> -
        {{ $task->name }}
    </h1>

    {{ $task->description }}
@endsection