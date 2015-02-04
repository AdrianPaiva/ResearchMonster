@extends('...layouts.master')

@section('content')

<div class='row'>
    @include('projects/projectNav')

    <div class="col-xs-10">


        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Project Name</h3>
          </div>
          <div class="panel-body">
             <p>Posted By: Name here</p>

             <p>Date Posted: January 1 2014</p>
          </div>
        </div>

    </div>


</div>



@stop
