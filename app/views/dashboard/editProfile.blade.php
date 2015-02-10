@extends('...layouts.master')

@section('content')

<div class="row">
    @include('dashboard/navPartial')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Edit Profile</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
    </div>
</div>

@stop