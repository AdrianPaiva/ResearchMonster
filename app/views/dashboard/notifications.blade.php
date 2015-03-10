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
                                          <button type="button" class="close" data-dismiss="alert">×</button>
                                          <h4>{{$n->title or ""}}</h4>
                                          <p>{{$n->message}}</p>
                                          <br>
                                          @if($n->project_application == 1)
                                            <a href="{{URL::to('projects/acceptUser/'. $n->applicantId.'/'.$n->project_id)}}" class="btn btn-green col-xs-offset-9"> Accept</a>
                                            <a href="{{URL::to('projects/removeUser/'. $n->userId.'/'.$n->project_id)}}" class="btn btn-danger  "> Deny</a>
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