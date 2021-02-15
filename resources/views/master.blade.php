<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="bg-info text-white p-5 mb-3">
        <a href="{{route('employee.index')}}" class="btn btn-secondary">Home</a>
        @auth
        <a href="{{route('employee.create')}}" class="btn btn-secondary">Create Employee</a>
        
            <form class="d-inline-block float-right" action="{{route('logout')}}" method="post">
                 @csrf
                 <button class="btn btn-secondary">{{auth()->user()->name}} | Logout</button>
            </form>
        @else 
            <a href="{{route('login')}}" class="btn btn-secondary">Login</a>
        @endauth
    </div>

    <div class="container">
        @yield('content')
    </div>


</body>
</html>
