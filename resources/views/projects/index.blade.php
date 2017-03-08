@extends('layouts.master')

@section('title','Page title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>



    {{ ($message) }}
@stop