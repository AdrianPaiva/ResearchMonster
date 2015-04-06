@extends('...layouts.master')

@section('content')

<div class='row'>
    @include('projects/projectNav')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center text-capitalize ">{{$project->name}}</h3>
          </div>
          <div class="panel-body">

            <div class="row">

                <div class="col-xs-9">
                      <p class="text-capitalize"><strong>Posted By:</strong> {{$project->user->profile->firstName}} {{$project->user->profile->lastName}}</p>
                      <p><strong>Email:</strong> {{$project->user->email}}</p>
                      <p><strong>Date Posted:</strong> {{$project->created_at}}</p>
                      <br>
                      <p><strong>Project Partner:</strong> {{$project->projectPartner}}</p>
                      <p><strong>Centre:</strong> {{$project->centre}}</p>
                </div>



                <div class="col-xs-3">
                    @if(Auth::user()->isStudent())
                     <a href="{{URL::to('projects/apply/'.$project->id)}}" class="btn btn-green col-xs-offset-2 ">Apply</a>
                    @endif
                    @if(Auth::user()->isResearcher() && $project->userId == Auth::user()->userId || Auth::user()->isAdmin())
                     <a href="{{URL::to('projects/editProject/'. $project->id)}}" class="btn btn-yellow">Edit</a>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>

                    @endif
                    @if(Auth::user()->canRecommend())
                     <a href="{{URL::to('projects/recommend/'. $project->id)}}" class="btn btn-green pull-right">Recommend Students</a>
                    @endif
                </div>

            </div>


             <hr>
             <strong><p><u>Project Description</u></p></strong>
             <p>
                {{$project->summary}}
             </p>
             <hr>
              <strong><p><u>Experience Required</u></p></strong>
                 <p>
                    {{$project->experience or "No experience required"}}
                 </p>
                <hr>
              <strong><p><u>Skills Required</u></p></strong>

              @if(is_object($project->skills))
                @foreach($project->skills as $skill)
                     <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>{{$skill->name}}</p>
                @endforeach
              @else
                <p>No skills required.</p>
              @endif

                <br><br><hr>

                @if($project->attachment != null)
                <strong><p><u>Attachments</u></p></strong>
                                          <p class="btn btn-yellow">{{ link_to($project->attachment, $project->attachmentName) }}</p>
                @endif
          </div>
        </div>
        @if(Session::has('message'))
        <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
        @endif

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete {{$project->name}}</h4>
              </div>
              <div class="modal-body">
                Are you sure that you want to delete this project?

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="{{URL::to('projects/deleteProject/'. $project->id)}}" type="button" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>

    </div>



</div>

<hr>

@if(Auth::user()->canViewUsers())

<div class="row">

            <div class="col-xs-10 col-xs-offset-2">


            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title text-center">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Users in {{$project->name}}
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">

                                                <table class="table table-bordered table-striped table-responsive table-hover ">
                                                                      <thead>
                                                                        <tr>
                                                                          <th>ID</th>
                                                                          <th>Name</th>
                                                                          <th>Email</th>
                                                                          <th></th>

                                                                        </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                   @foreach($project->users as $user)
                                                                     @if($user->pivot->accepted == 1)
                                                                        <tr>
                                                                          <td>{{$user->userId}} </td>
                                                                          <td>{{$user->profile->firstName}} {{$user->profile->lastName}}</td>
                                                                           <td>{{$user->email}}</td>

                                                                          <td>
                                                                          @if($project->userId == Auth::user()->userId)
                                                                            <a href="{{URL::to('projects/removeUser/'. $user->userId.'/'.$project->id)}}" class="btn btn-sm btn-danger pull-right"> Remove User </a>
                                                                          @endif
                                                                            <a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn btn-sm btn-green pull-right "> View Profile </a>
                                                                          </td>
                                                                        </tr>

                                                                     @endif
                                                                   @endforeach
                                                                      </tbody>
                                                                    </table>

                  </div>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title text-center">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Pending Applications
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">

                                                <table class="table table-bordered table-striped table-responsive table-hover ">
                                                                      <thead>
                                                                        <tr>
                                                                          <th>ID</th>
                                                                          <th>Name</th>
                                                                          <th>Email</th>
                                                                          <th></th>
                                                                          <th></th>
                                                                        </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                    @foreach($project->users as $user)
                                                                      @if($user->pivot->accepted == 0)
                                                                        <tr>
                                                                          <td>{{$user->userId}}</td>
                                                                          <td>{{$user->profile->firstName}} {{$user->profile->lastName}}</td>
                                                                           <td>{{$user->email}}</td>

                                                                          <td>
                                                                          <div class="text-center">
                                                                            <a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn btn-sm btn-green"> View Profile </a>
                                                                          </div>

                                                                          </td>
                                                                           <td>
                                                                           @if($project->userId == Auth::user()->userId)
                                                                                <a href="{{URL::to('projects/acceptUser/'. $user->userId.'/'.$project->id)}}  " class="btn btn-sm btn-green "> Accept </a>
                                                                                 <a href="{{URL::to('projects/denyUser/'. $user->userId.'/'.$project->id)}}" class="btn btn-sm btn-danger pull-right "> Deny </a>
                                                                            @endif
                                                                            </td>
                                                                        </tr>
                                                                      @endif
                                                                    @endforeach


                                                                      </tbody>
                                                                    </table>

                  </div>
                </div>
              </div>

              <div class="panel panel-primary">
                              <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title text-center">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Recommended Users
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">

                                                              <table class="table table-bordered table-striped table-responsive table-hover ">
                                                                                    <thead>
                                                                                      <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Name</th>
                                                                                        <th>Email</th>
                                                                                        <th></th>

                                                                                      </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                  @foreach($project->recommendedUsers as $user)

                                                                                      <tr>
                                                                                        <td>{{$user->userId}}</td>
                                                                                        <td>{{$user->profile->firstName}} {{$user->profile->lastName}}</td>
                                                                                         <td>{{$user->email}}</td>

                                                                                        <td>
                                                                                        <div class="text-center">
                                                                                          <a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn btn-sm btn-green"> View Profile </a>
                                                                                        </div>

                                                                                        </td>

                                                                                      </tr>

                                                                                  @endforeach


                                                                                    </tbody>
                                                                                  </table>

                                </div>
                              </div>
                            </div>


            </div>

            </div>

</div>
@endif


<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>

@stop
