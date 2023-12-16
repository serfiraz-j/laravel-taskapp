@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <hr>
<br>
    @foreach ($tasks as $task)
        <div class="task item">
            <strong>Task Title: {{ $task->name }} </strong>
            <p>Description: {{ $task->description }}</p>

            
            
            <form method="POST" action="{{ route('update', ['task' => $task->id])}}">
            @csrf
            @method('DELETE')
           <a href="{{ route('show', ['task' => $task->id])}}" class="link-dark view-link"><strong>View</strong>  </a>
            <a href="{{ route('edit', ['task' => $task->id])}}" class="edit-link"><strong>Edit</strong> </a>
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach
@endsection