@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Create New Todo</h1><br><br>
            <div class="card card-default">
                <div class="card-header">Create New Todo</div>
                <div class="card-body">
                    
            <form action="/Todo-app/public/todolist/update/{{$todo->id}}" method="post">
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="form-control" value="{{$todo->name}}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description"    class="form-control">{{$todo->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
                     
                </div>
            </div>
        </div>
    </div>
@endsection