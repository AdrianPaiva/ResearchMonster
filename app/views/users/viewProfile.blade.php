@extends('...layouts.master')

@section('content')

<div class="row">

    @include('users/userNav')

<div class="col-xs-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-center">{{{$profile->firstName or "First "}}} {{{$profile->lastName or "Last "}}}</h3>
              </div>
              <div class="panel-body">

            <img class="img-responsive col-xs-3" src="/images/homer.jpg">

            <a class="btn btn-green pull-right" href="/requestUser">Request</a>
            <br>
            <br>
            <br>
            <a class="" href="/"><img class="img col-xs-2 pull-right"  src="/images/linkedin-button.png"></a>
                    <h5 class="lead">{{{$profile->userId or "User ID"}}}</h5>

                    <h5 class="lead">{{{$profile->program or "T127 Computer Programmer Analyst"}}}</h5>

                    <h5 class="lead">{{{$profile->email or "email@gmail.com"}}}</h5>

                    <br>
     <hr>
          <h5><u>About Me</u></h5>
          <br>
          <p>
            Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.

            Nulla wisi laoreet suspendisse hendrerit facilisi, mi mattis pariatur adipiscing aliquam pharetra eget. Aenean urna ipsum donec tellus tincidunt, quam curabitur metus, pretium purus facilisis enim id, integer eleifend vitae volutpat consequat per leo.
            Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.</p>

     <br>
  <hr>
            <h5><u>Experience</u></h5>
            <br>
                      <p>
                        Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.

                        Nulla wisi laoreet suspendisse hendrerit facilisi, mi mattis pariatur adipiscing aliquam pharetra eget. Aenean urna ipsum donec tellus tincidunt, quam curabitur metus, pretium purus facilisis enim id, integer eleifend vitae volutpat consequat per leo.
                        Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.</p>

     <br>
          <hr>
                 <h5><u>Skills</u></h5>
                 <br>
                         <p class="btn btn-sm btn-green">PHP</p>
                         <p class="btn btn-sm btn-green">MYSQL</p>
                         <p class="btn btn-sm btn-green">PHP</p>
                         <p class="btn btn-sm btn-green">MYSQL</p>

    <br>
    <hr>
            <h5><u>Attachments</u></h5>
            <br>
                <p class="btn btn-sm btn-yellow">Resume</p>
                <p class="btn btn-sm btn-yellow">Portfolio</p>
    </div>


</div>

@stop