@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 jumbotron">

            <div class="jumbotron">
                <div class="row ">
                    <img class="img-responsive img-circle col-xs-6 col-xs-offset-3"  src="/images/gbc_small.png">
                </div>

                <br>
                <br>
            {{ Form::open(array('url' => 'login')) }}
                <h4 class="text-center">Welcome back.</h4>
                <br>
                {{ Form::text('userId', '', array('class' => "form-control float ",'placeholder' => "User ID")) }}

                <br>
                                {{ $errors->first('userId') }}
                <br>
                {{ Form::password('userPassword', array('class' => "form-control float",'placeholder' => "Password")) }}
                <br>
                               {{ $errors->first('userPassword') }} <h6>{{$error or " "}} </h6>
                <br>
                <br>

                    {{Form::checkbox('remember','1')}}
                    {{Form::label('remember', 'remember me')}}

                    <a href="/forgotPassword" class="btn-sm btn-yellow pull-right">Forgot your password?</a>

                <br><br><br><br><br>
                {{Form::submit("LOGIN",array("class" => "btn btn-green col-xs-offset-5"))}}
                <br>

                {{ Form::close() }}


            </div>
            <h6 class="text-center text-danger">{{$err or " "}} </h6>


        </div>


    </div>


<script>
    $('.float').jvFloat();
</script>


@stop