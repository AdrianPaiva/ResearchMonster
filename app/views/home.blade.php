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



</div>

<div class="progress">
  <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
  <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
  <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
  <div class="progress-bar progress-bar-success" style="width: 20%"></div>
</div>


<div class="row">
    <h2 class="text-center lead">GET STARTED ON YOUR NEXT AWESOME PROJECT!</h2>
        <br>
        <br>

        <div class="col-xs-6 ">
            <div class="jumbotron text-center">
                <p class="text-center">Already a member?</p>
                <br>
                <br>
                <a href="login" class="btn-lg btn-yellow "> Login</a>
            </div>


        </div>

        <div class="col-xs-6 ">
               <div class="jumbotron text-center">
                  <p class="text-center">Start here to create your account</p>
                  <br>
                                  <br>
                  <a href="register" class="btn-lg btn-yellow "> Register</a>
               </div>


         </div>
</div>
<br>
<br>
<div class="progress">
  <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
  <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
  <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
  <div class="progress-bar progress-bar-success" style="width: 20%"></div>
</div>


@stop
