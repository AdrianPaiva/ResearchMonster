@extends('layouts.master')

@section('content')

<div class="jumbotron text-center" id="homeJumbotron">
  <h2 class="jumbotronHeader">RESEARCH MONSTER</h2>
    <br>
    <br>
    <br>
    <br>
    <h4 class="jumbotronHeader">George Brown College</h4>
    <h4 class="jumbotronHeader">Office of Research and Innovation </h4>

  @if(Auth::check())
    @if(Auth::user()->isStudent())
        I am a user
    @elseif(Auth::user()->isAdmin())
        I am an admin
    @elseif(Auth::user()->isResearcher())
        I am a researcher
    @endif
  @endif
</div>

@include('layouts/hr')


<div class="row">
    <h2 class="text-center lead">GET STARTED ON YOUR NEXT AWESOME PROJECT!</h2>
        <br>
        <br>

        @if(! Auth::check())

        <div class="col-xs-6 ">
            <div class="jumbotron text-center">
                <p class="text-center">Already a member?</p>
                <br>
                <br>
                <a href="login" class="btn-lg btn-green "> Login</a>

            </div>
        </div>

        <div class="col-xs-6 ">
               <div class="jumbotron text-center">
                  <p class="text-center">Start here to create your account</p>
                  <br>
                                  <br>
                  <a href="register" class="btn-lg btn-green "> Register</a>
               </div>
        </div>

        @endif

        @if(Auth::check())
          @foreach($projects as $proj)

            <div class="col-xs-3">
                <div class="panel panel-default ">
                  <div class="panel-heading center-block ">
                    <h3 class="panel-title text-center btn-primary text-white text-capitalize">{{$proj->name}}</h3>
                  </div>
                  <div class="panel-body ">

                    <h6 class="text-capitalize"><strong >Posted By:</strong> {{$proj->postedBy}}</h6>
                    <h6 class="text-capitalize"><strong>Date Posted:</strong> {{$proj->created_at}}</h6>
                    <hr>
                    <p>
                        {{$proj->summary or ""}}
                    </p>
                        <div class="text-center">
                            <a href="{{URL::to('projects/viewProject/'. $proj->id)}}" class="btn-sm btn-green"> View Project </a>
                        </div>
                  </div>
                </div>
            </div>

          @endforeach
        @endif
</div>
<br>
<br>

@if(Session::has('message'))
<h4 class="alert alert-success">{{ Session::get('message') }}</h4>
@endif

@include('layouts/hr')


@stop
