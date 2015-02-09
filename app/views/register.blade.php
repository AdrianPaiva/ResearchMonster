@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row ">
        <div class="col-xs-8 col-xs-offset-2 jumbotron">

            <div class="form-horizontal">
                                <div class="row ">
                                    <img class="img-responsive img-circle col-xs-6 col-xs-offset-3"  src="/images/gbc_small.png">
                                </div>
            <br>
            {{ Form::open(array('url' => 'register')) }}
                <h4 class="text-center">Welcome To GBC Research Monster.</h4>
                <br>
                <br>
                <div class="form-group ">
                    <div class="col-xs-10 col-xs-offset-1">
                         {{ Form::text('userId', '', array('class' => "form-control",'placeholder' => "GBC User ID")) }}
                            <br>
                            <br>
                         {{ Form::email('email', '', array('class' => "form-control  ",'placeholder' => "GBC Email Address")) }}
                            <br>
                            <br>
                         {{ Form::password('userPassword', array('class' => "form-control ",'placeholder' => "Password")) }}
                            <br>
                            <br>
                         {{ Form::password('userPasswordConfirm', array('class' => "form-control ",'placeholder' => "Confirm Password")) }}
                    </div>

                </div>

                <br>
                <br>
                {{Form::submit("Complete Registration",array("class" => "btn btn-success col-md-offset-4"))}}
                {{ Form::close() }}
            </div>

        </div>
    </div>
</div>

@stop