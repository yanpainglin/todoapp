@extends('layout.app')

@section('content')
]
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card card-default">
            <h1 class="text-center">Todo List</h1>
                <div class="card-body">
                    <ul class="list-group">
                    @foreach($todo as $todo)

                        <li class="list-group-item">
                        {{$todo->name}}
                        @if(!$todo->completed)
                            <a href= "/Todo-app/public/todolist/complete/{{$todo->id}}"  class="btn btn-small btn-danger float-right ml-2">Completed</a>
                        @endif
                        
                             <a href= "/Todo-app/public/todolist/view/{{$todo->id}}"  class="btn btn-small btn-primary float-right">View</a>
                        </li>
                        
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

@endsection