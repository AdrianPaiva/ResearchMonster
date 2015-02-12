@extends('layouts.master')

@section('content')



    <div class="row ">
        <div class="col-xs-4 col-xs-offset-4 jumbotron">

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
                         {{ Form::text('userId', '', array('class' => "form-control float",'placeholder' => "User ID")) }}
                            <br>
                            <br>
                         {{ Form::text('firstName', '', array('class' => "form-control float",'placeholder' => "First Name")) }}
                            <br>
                            <br>
                         {{ Form::text('lastName', '', array('class' => "form-control float",'placeholder' => "Last Name")) }}
                            <br>
                            <br>
                         {{ Form::email('email', '', array('class' => "form-control float ",'placeholder' => "Email")) }}
                            <br>
                            <br>
                         {{ Form::password('password', array('class' => "form-control float",'placeholder' => "Password")) }}
                            <br>
                            <br>
                         {{ Form::password('password_confirmation', array('class' => "form-control float",'placeholder' => "Confirm Password")) }}
                    </div>

                </div>

                <br><br>

                @if($errors->has())

                    <ul>
                        @foreach($errors->all() as $message)

                            <li class="text-danger">{{ $message }}</li>

                        @endforeach
                </ul>

                @endif

                <br>
                <br>
                {{Form::submit("Complete Registration",array("class" => "btn btn-green col-md-offset-4"))}}
                {{ Form::close() }}
            </div>

        </div>
    </div>

<script>
    $('.float').jvFloat();
</script>

@stop