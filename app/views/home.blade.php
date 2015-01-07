@extends('layouts.master')

@section('content')

<div class="jumbotron text-center" id="homeJumbotron">

  <h1>Welcome</h1>
    <br>
    <br>
    <br>
  <p>GET STARTED ON YOUR NEXT AWESOME PROJECT!</p>
  <br>
    @if(Auth::check())
        <h2>logged in!</h2>
    @endif
  <p><a class="btn btn-primary btn-lg ">View Projects</a></p>

  <br>
  <br>
</div>


<div class="row">

    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Panel info</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Panel info</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Panel info</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div>

</div>
@stop
