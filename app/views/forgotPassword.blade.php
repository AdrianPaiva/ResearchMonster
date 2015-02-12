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

                <form action="forgotPassword" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <input type="submit" class="btn btn-green" value="Send Reminder">
                </form>


        </div>


    </div>


<script>
    $('.float').jvFloat();
</script>


@stop