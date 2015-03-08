@extends('...layouts.master')

@section('content')

<div class='row'>
    @include('projects/projectNav')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">{{$project->name}}</h3>
          </div>
          <div class="panel-body">

            <div class="row">

                <div class="col-xs-6">
                      <p><strong>Posted By:</strong> {{$project->postedBy}}</p>
                      <p><strong>Date Posted:</strong> {{$project->created_at}}</p>
                </div>

                <div class="col-xs-6">
                    @if(Auth::user()->isStudent())
                     <a href="#" class="btn btn-green col-xs-offset-2 ">Apply</a>
                    @endif
                    @if(Auth::user()->isResearcher())
                     <a href="/projects/editProject/1" class="btn btn-yellow">Edit</a>
                     <a href="#" class="btn btn-danger ">Delete</a>
                    @endif
                    @if(Auth::user()->isProfessor())
                     <a href="#" class="btn btn-yellow ">Recommend</a>
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
                    {{$project->experience}}
                 </p>
                <hr>
              <strong><p><u>Skills Required</u></p></strong>

              @if($project->skills != null)
                @foreach(unserialize($project->skills) as $skill)
                     <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>{{$skill}}</p>
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



    </div>



</div>

<hr>

@if(Auth::user()->isResearcher() || Auth::user()->isAdmin())

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
                                                                            <a href="#" class="btn btn-sm btn-danger pull-right"> Remove User </a>
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
                                                                               <a href="#" class="btn btn-sm btn-green "> Accept </a>
                                                                                 <a href="#" class="btn btn-sm btn-danger pull-right "> Deny </a>
                                                                            </td>
                                                                        </tr>
                                                                      @endif
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
