<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{{$title or "Title"}}}</title>

	{{ HTML::style('css/main.css'); }}
	{{ HTML::style('css/bootstrap.css'); }}


</head>
<body>



  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    	<ul class="nav navbar-nav">

    	    <a class="brand" href="/"><img class="img-circle col-xs-1" src="/images/paper-logo.png"></a>
    	    <li><h3 class="mainTitle">Research Monster</h3></li>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/users">Users</a></li>

                <div class="nav navbar-nav navbar-right">
                      <li><a href="/dashboard/notifications">Dashboard <span class="badge">3</span> </a></li>
                      <li><a href="/login">Login</a></li>
                      <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                </div>
        </ul>


  </div>
  </nav>

	<div class="container">
		@yield('content')
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>
</html>