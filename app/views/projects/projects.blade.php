@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('projects/projectNav')

                <div class="col-xs-10 ">
                    <table id="table" class="table table-bordered table-striped table-responsive table-hover  ">
                      <thead>
                        <tr>

                          <th>Name</th>
                          <th style="width: 35%;">Description</th>
                          <th>Posted By</th>
                          <th>Date Posted</th>
                          <th>Required Skills</th>
                          <th></th>
                        </tr>

                      </thead>
                      <tbody>
                      @foreach($projects as $project)
                         <tr>

                           <td class="lead">{{$project->name}}</td>
                           <td class="summary">{{$project->summary}}</td>
                           <td>{{$project->user->profile->firstName}} {{$project->user->profile->lastName}}</td>
                           <td>{{$project->created_at}}</td>
                           <td>
                            <div class="text-center">
                             <div class="btn-group">
                                   <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Skills</a>
                                       <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                                 <ul class="dropdown-menu">

                                                    @foreach($project->skills as $skill)
                                                       <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>{{$skill->name}}</p>
                                                    @endforeach

                                                 </ul>
                             </div>
                            </div>
                           </td>
                           <td>
                               <div class="text-center">
                                <a href="{{URL::to('projects/viewProject/'. $project->id)}}" class="btn btn-sm"> View Project </a>
                               </div>
                           </td>
                         </tr>
                      @endforeach

                      </tbody>
                    </table>

                </div>
</div>


<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable({
            "pageLength": 10,
            "columnDefs": [
                { "searchable": false, "targets": 5}
              ],
              "order": [ 3, 'desc']
        });
        
        
    });
    
</script>

<script type="text/javascript">$(document).ready(function(){$(".summary").shorten();});</script>

@stop
