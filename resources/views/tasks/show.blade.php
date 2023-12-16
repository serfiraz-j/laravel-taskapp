@extends('layouts.app')

@section('content')
    <h1>{{$task->name}}</h1>
    <p>{{$task->description}}</p>
    <hr>
    <h5><a href="{{ route('index')}}" class="link-dark link-offset-5 link-underline-opacity-0">Back to Tasks</a></h5>
@endsection