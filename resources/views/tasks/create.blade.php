@extends('layouts.app')

@section('content')
    <h1>Create a New Task</h1>

    <form method="POST" action="{{ route('store')}}">
        @csrf
        <label for="name">Task Name</label>
        <input type="text" name="name" id="name">

        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <br>
        <button type="submit"> Create Task</button>
    </form>

    <h5><a href="{{ route('index')}}" class="link-dark link-offset-5 link-underline-opacity-0">Back to Tasks</a></h5>
@endsection