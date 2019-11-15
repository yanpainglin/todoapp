<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Todo List</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Todo-app/public">Todo Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/Todo-app/public/todolist">Todos List </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/Todo-app/public/todolist/create">Create New Todo </a>
      </li>
      
    
       
    </ul>
    
  </div>
</nav>
      <div class="container">
            @if(session()->has('success'))
              <div class="alert alert-success">
                  {{session()->get('success')}}
              </div>
              @endif
      </div>

    @yield('content')
 
    </body>
</html>