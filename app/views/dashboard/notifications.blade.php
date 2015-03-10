@extends('...layouts.master')

@section('content')

<div class='row'>

    @include('dashboard/navPartial')

        <div class="col-xs-10">

            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-center">Notifications</h3>
              </div>
              <div class="panel-body">
                            	<div class="row">
                                    <div class="col-xs-12 ">
                                    @foreach($notif as $n)
                                        <div class="alert-message alert-message-info">
                                          <a href="{{URL::to('dashboard/notifications/delete/'.$n->id)}}" type="button" class="close" data-dismiss="alert">×</a>
                                          <h4>{{$n->title or ""}}</h4>
                                          <p>{{$n->message}}</p>
                                          <br>
                                          @if($n->project_id != null)
                                               <a href="{{URL::to('projects/viewProject/'.$n->project_id)}}" class="btn-sm btn-green"> View Project</a>
                                          @endif
                                        @if($n->project->users->contains($n->applicantId))
                                          @if($n->project_application == 1 && $n->project->users->find($n->applicantId)->pivot->accepted == 0)
                                            <a href="{{URL::to('users/viewProfile/'.$n->applicantId)}}" class="btn-sm btn-green"> View Profile</a>
                                            <a href="{{URL::to('projects/acceptUser/'. $n->applicantId.'/'.$n->project_id)}}" class="btn btn-green col-xs-offset-6"> Accept</a>
                                            <a href="{{URL::to('projects/denyUser/'. $n->applicantId.'/'.$n->project_id)}}" class="btn btn-danger  "> Deny</a>
                                          @endif
                                        @endif


                                        </div>
                                    @endforeach
                                    </div>
                            	</div>
              </div>
            </div>

        </div>





</div>
@stop