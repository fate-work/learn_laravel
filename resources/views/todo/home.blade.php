@extends('layout.todoapp')
@section('body')
    <br>
    <a href="todo/create" class="btn btn-info">Add new</a>
    <div class="col-lg-4 col-lg-offset-4">
       <center><h1>Todo Lists</h1></center>
        <ul class="list-group">
            @foreach($todos as $todo)
            <li class="list-group-item">
                {{$todo->body}}
                <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
            </li>
                @endforeach
        </ul>
    </div>
@endsection