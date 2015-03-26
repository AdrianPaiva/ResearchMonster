@extends('layouts.master')

@section('content')

<div class="jumbotron text-center" id="homeJumbotron">
  <h3 class="jumbotronHeader">RESEARCH MONSTER</h3>
    <br>
    <br>
    <br>
    <br>
    <h4 class="jumbotronHeader">George Brown College</h4>
    <h4 class="jumbotronHeader">Office of Research and Innovation </h4>
    <br>
    <h5 class="lead"><i>Enabling the Innovation Economy</i></h5>
</div>

@include('layouts/hr')


<div class="row">
        <div class="col-xs-6 col-xs-offset-3 well-lg text-center">
            <H4 >Get Started On Your Next Awesome Project</H4>
            <br>
            <p class="lead">
                As a student of George Brown College you can get involved in a research project for course credit or as a part time paid applied research assistant. Learn more about some of the exciting projects we have underway.
            </p>
        </div>
        @if(! Auth::check())
                <br>
                <br>
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

</div>

<div class="row">
            @if(Auth::check())
            <br><br>
              @foreach($projects as $proj)

                <div class="col-xs-4">
                    <div class="well well-lg">
                        <h5 class="text-center text-capitalize text-primary">{{$proj->name}}</h5>
                        <br>
                        <p class="text-capitalize"><b class="lead" >Posted By:</b>{{$proj->postedBy}} </p>
                        <p class="text-capitalize"><strong class="lead">Date Posted:</strong> {{$proj->created_at}}</p>
                        <hr>
                        <p>
                        <div class='summary'>
                            {{ $proj->summary}}
                        </div>

                        </p>
                        <div class="text-center">
                              <a href="{{URL::to('projects/viewProject/'. $proj->id)}}" class="btn btn-sm "> View Project </a>
                        </div>
                    </div>

                </div>

              @endforeach
            @endif
</div>
<br>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3 well-lg text-center">
        <H4 class="text-center">Contact Us</H4>
        <br>
            <p class="lead">
                 GBC Research and Innovation engages industry, faculty, students, and the community-at-large through participation in educationally and economically meaningful research projects and partnerships.
            </p>

            <span class="glyphicon glyphicon-envelope btn-lg"></span><br>
            <a href="mailto:research@georgebrown.ca">research@georgebrown.ca</a><br><br><br>

            <a href="http://www.georgebrown.ca/research/" class="btn btn-primary">GBC Office of Research and Innovation</a>
    </div>


</div>
<br>
<br>

@if(Session::has('message'))
<h4 class="alert alert-success">{{ Session::get('message') }}</h4>
@endif

@include('layouts/hr')

<script type="text/javascript">$(document).ready(function(){$(".summary").shorten({"showChars" : 500});});</script>
@stop
