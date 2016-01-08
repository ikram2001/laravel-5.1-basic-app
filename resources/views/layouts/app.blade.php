<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to Laravel 5.1 - Project/Task Basic App</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="/css/style.css" >
        {!! Html::style('css/style.css') !!}
    </head>

    <body>
        <div class="container">
            
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <div>
                    <a href="/">Home</a> &nbsp; | &nbsp; <a href="/projects">All Projects</a> &nbsp; | &nbsp; <a href="/projects/project-1">Tasks</a>
                </div>
            </nav>        
            <div class="heading">Welcome to Laravel 5.1 - Project/Task Basic App</div>
            
            <div class="content">            
                @if (Session::has('message'))
                    <div class="flash alert-info">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif 

                @yield('content')

            </div>
        </div>    
    </body>
</html>
