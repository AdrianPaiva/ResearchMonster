<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{{$title or "Title"}}}</title>

	{{ HTML::style('css/main.css'); }}
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css'); }}


</head>
<body>
<?php
            $page = Route::current()->getUri();
        ?>

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>



  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    	<ul class="nav navbar-nav">

            <a class="brand" href="/"><img class="img-circle col-xs-1 brand navbar-btn"  src="/images/gbc_small.png"></a>
    	    <li><h3 class="mainTitle"><b class="text-success lead">GBC</b> Research Monster</h3></li>


            @if(Auth::check())
                <li class="@if( $page == "/") {{'active'}} @endif"><a href="/" >Home</a></li>
                <li class="@if( $page == "projects") {{'active'}} @endif"><a href="{{URL::to('/projects')}}">Projects</a></li>
                <li class="@if( $page == "users") {{'active'}} @endif"><a href="{{URL::to('/users')}}">Users</a></li>
            @endif

                <div class="nav navbar-nav navbar-right">

                      @if(Auth::check())
                        <li class="@if( $page == "dashboard/notifications" || $page == "dashboard/profile" || $page == "dashboard/editProfile" || $page == "dashboard/addProject") {{'active'}} @endif"><a href="{{URL::to('dashboard/notifications')}}">Dashboard <span class="label label-success  label-as-badge">3</span> </a></li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                      @else
                        <li class="@if( $page == "login") {{'active'}} @endif"><a href="{{URL::to('/login')}}">Login</a></li>
                        <li class="@if( $page == "register") {{'active'}} @endif"><a href="{{ URL::to('/register') }}">Register</a></li>
                      @endif

                </div>


        </ul>


  </div>

  </nav>

	<div class="container">
		@yield('content')
	</div>




<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript"  src="js/jquery.dataTables.js"></script>
-->

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>