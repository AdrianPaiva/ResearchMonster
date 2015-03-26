@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 jumbotron">

            <div class="jumbotron text-center">
                <div class="row ">
                    <img class="img-responsive img-circle col-xs-6 col-xs-offset-3"  src="/images/gbc_small.png">
                </div>

                <br>
                <br>

                <form action="{{ action('RemindersController@postReset') }}" method="POST">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="email" name="email" placeholder="email"><br><br><br>
                    <input type="password" name="password" placeholder="password"><br><br><br>
                    <input type="password" name="password_confirmation" placeholder="confirm password"><br><br><br>
                    <br><br><br>

                    <input type="submit" class="btn btn-sm btn-primary" value="Reset Password">
                </form>


        </div>


    </div>


<script>
    $('.float').jvFloat();
</script>


@stop