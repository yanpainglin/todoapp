@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Create New Todo</h1>
            <div class="card card-default">
                <div class="card-header">Create New Todo</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </div>
                    @endif
            <form  method="post">
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description"   class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
            </form>
                     
                </div>
            </div>
        </div>
    </div>
@endsection