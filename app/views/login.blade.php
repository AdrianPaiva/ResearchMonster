@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-5">

            <div class="form-login">
            {{ Form::open(array('url' => 'login')) }}
                <h4 class="text-center">Welcome back.</h4>
                <br>
                {{ Form::text('userId', '', array('class' => "form-control  ",'placeholder' => "User Id")) }}
                <br>
                                {{ $errors->first('userId') }}
                <br>
                {{ Form::password('userPassword', array('class' => "form-control ",'placeholder' => "Password")) }}
                <br>
                               {{ $errors->first('userPassword') }} <h6>{{$error or " "}} </h6>
                <br>
                <br>
                {{Form::submit("LOGIN",array("class" => "btn btn-primary btn-md col-md-offset-5"))}}
                {{ Form::close() }}
            </div>
            <h6>{{$err or " "}} </h6>
        </div>
    </div>
</div>

@stop