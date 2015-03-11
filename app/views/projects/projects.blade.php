@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('projects/projectNav')

                <div class="col-xs-10 ">
                    <table id="table" class="table table-bordered table-striped table-responsive table-hover  ">
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
                            <div class="text-center">
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
                            </div>
                           </td>
                           <td>
                               <div class="text-center">
                                <a href="{{URL::to('projects/viewProject/'. $project->id)}}" class="btn-sm btn-green"> View Project </a>
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
            "pageLength": 25,
            "columnDefs": [
                { "searchable": false, "targets": 4 }
              ],
              "order": [ 2, 'desc']
        });

    });
</script>

@stop
