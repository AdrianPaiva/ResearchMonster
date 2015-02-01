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

<hr>
<div class="row">
    <h2 class="text-center lead">GET STARTED ON YOUR NEXT AWESOME PROJECT!</h2>
        <br>
        <br>

        <div class="col-xs-6 ">
            <div class="jumbotron text-center">
                <p class="text-center">Already a member?</p>
                <br>
                <br>
                <a href="login" class="btn-lg btn-warning "> Login</a>
            </div>


        </div>

        <div class="col-xs-6 ">
               <div class="jumbotron text-center">
                  <p class="text-center">Start here to create your account</p>
                  <br>
                                  <br>
                  <a href="register" class="btn-lg btn-warning "> Register</a>
               </div>


         </div>
</div>
<hr>
@stop
