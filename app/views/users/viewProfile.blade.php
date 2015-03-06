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

                <div class="col-xs-4">
                    <img class="img-responsive " src="{{$profile->picture}}">
                </div>

                <div class="col-xs-6">
                        <h5 class="lead">{{{$profile->firstName or "First "}}} {{{$profile->lastName or "Last "}}}</h5>
                        <h5 class="lead">{{{$profile->userId or "User ID"}}}</h5>
                        <h5 class="lead">{{{$profile->program or "Please select your program"}}}</h5>
                        <h5 class="lead">{{{$email or " "}}}</h5>
                </div>

                <div class="col-xs-2">
                     @if(Auth::user()->canRecommend())
                        <a href="#" class="btn btn-sm btn-yellow">Recommend</a>
                     @endif
                </div>


              <div class="col-xs-12">

                    <br>
                <hr>
                <h5><u>About Me</u></h5>
                <br>
                <p>
                    {{$profile->summary or ''}}
                </p>

                <br>
                <hr>

                <h5><u>Experience</u></h5>
                <br>
                <p>
                    {{$profile->experience or ''}}
                </p>
                <br>
                <hr>

                <h5><u>Skills</u></h5>
                <br>
                @if($skills != null)
                   @foreach($skills as $skill)
                     <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{$skill}}</p>
                   @endforeach
                @endif
                <br>
                 <hr>

                <h5><u>Attachments</u></h5>
                <br>
                    @if($profile->attachment1 != null)
                          <p class="btn btn-yellow">{{ link_to($profile->attachment1, $profile->attachment2) }}</p>
                    @endif


             </div>
  </div>
@stop