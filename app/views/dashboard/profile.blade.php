@extends('...layouts.master')

@section('content')

<div class="row">
    @include('dashboard/navPartial')


    <div class="col-xs-10">
            <img class="img-responsive col-xs-3" src="../images/default-profile.jpg">
                    <h4>{{$profile->firstName or "First Name"}}</h4>
                    <br>
                    <p>{{$profile->program or "T127 Computer Programmer Analyst"}}</p>
                    <p>{{$profile->email or "email@gmail.com"}}</p>
                    <br>
                    <br>
    </div>

     <div class="col-xs-10">
     <hr>
          <h5>About Me</h5>
          <p>
            Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.

            Nulla wisi laoreet suspendisse hendrerit facilisi, mi mattis pariatur adipiscing aliquam pharetra eget. Aenean urna ipsum donec tellus tincidunt, quam curabitur metus, pretium purus facilisis enim id, integer eleifend vitae volutpat consequat per leo.
            Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.</p>
     </div>

     <br>

     <div class="col-xs-10 col-xs-offset-2">
     <hr>
            <h5>Experience</h5>
            <p>
                - Lorem ipsum dolor sit amet <br>
                - Lorem ipsum dolor sit amet <br>
                - Lorem ipsum dolor sit amet <br>
                - Lorem ipsum dolor sit amet <br>
            </p>
     </div>

     <br>

     <div class="col-xs-10 col-xs-offset-2">
          <hr>
                 <h5>Skills</h5>
                 <p>
                     - Lorem ipsum dolor sit amet <br>
                     - Lorem ipsum dolor sit amet <br>
                     - Lorem ipsum dolor sit amet <br>
                     - Lorem ipsum dolor sit amet <br>
                 </p>
     </div>

    <br>
    <div class="col-xs-10 col-xs-offset-2">
    <hr>
        <div class="panel panel-default">
               <div class="panel-heading">Attachments</div>
               <div class="panel-body">
                 Panel content
               </div>
             </div>
    </div>



</div>

@stop