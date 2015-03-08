@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('projects/projectNav')

                <div class="col-xs-10 ">
                    <table id="table" class="table table-bordered table-striped table-responsive table-hover ">
                      <thead>
                        <tr>

                          <th>Name</th>
                          <th>Posted By</th>
                          <th>Date Posted</th>
                          <th>Required Skills</th>
                          <th></th>
                        </tr>

                      </thead>
                      <tbody>
                      @foreach($projects as $project)
                         <tr>

                           <td>{{$project->name}}</td>
                           <td>{{$project->user->profile->firstName}} {{$project->user->profile->lastName}}</td>
                           <td>{{$project->created_at}}</td>
                           <td>

                             <div class="btn-group">
                                   <a href="#" class="btn btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Skills</a>
                                       <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                                 <ul class="dropdown-menu">
                                                 @if($project->skills != null)
                                                    @foreach(unserialize($project->skills) as $skill)
                                                       <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>{{$skill}}</p>
                                                    @endforeach
                                                 @endif
                                                 </ul>
                             </div>

                           </td>
                           <td><a href="{{URL::to('projects/viewProject/'. $project->id)}}" class="btn-sm btn-green pull-right"> View Project </a></td>
                         </tr>
                      @endforeach

                      </tbody>
                    </table>

                </div>
</div>


<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>

@stop
