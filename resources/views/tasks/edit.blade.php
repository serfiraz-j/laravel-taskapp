@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    <form method="POST" action="{{ route('update', ['task' => $task->id])}}">
        @method('PUT')
        @csrf
        <label for="name">Task Name</label>
        <input type="text" name="name" value="{{$task->name}}" id="name">

        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{$task->description}}</textarea>

        <br>
        <button type="submit"> Update Task</button>
        
       

    </form>
    
    <h5><a href="{{ route('index')}}" class="link-dark link-offset-5 link-underline-opacity-0">Back to Tasks</a></h5>
@endsection