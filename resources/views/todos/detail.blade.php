@extends('layout.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <h1 class="text-center">Todo Detail</h1>
                <div class="card card-default">
                    <div class="card-header">
                        <h2 class="text-center">{{$todo->name}}</h2>
                    </div>
                    <div class="card-body">
                        {{$todo->description}}
                    </div>
                    <div class="card-footer">
                        {{ $todo->created_at->diffForHumans()}}
                    </div>
                </div><br>
                <a href="/Todo-app/public/todolist/edit/{{$todo->id}}" class="btn btn-secondary">Edit</a>
                <a href="/Todo-app/public/todolist/delete/{{$todo->id}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    
@endsection