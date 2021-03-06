@extends('...layouts.master')

@section('content')

<div class="row">

        @include('users/userNav')
           <div class="col-xs-10 ">
                    <table class="table table-bordered table-striped table-responsive table-hover ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Program</th>
                          <th>Skills</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($users as $user)

                        <tr>
                          <td>{{$user->userId}}</td>
                          <td>{{$user->profile->firstName}} {{$user->profile->lastName}}</td>
                          <td>{{$user->profile->program or "No Program Selected"}}</td>
                          <td>
                          <div class="text-center">
                             <div class="btn-group">
                                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Skills</a>
                                <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                        @foreach($user->skills as $skill)

                                           <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{$skill->name}}</p>
                                        @endforeach

                                    </ul>
                             </div>
                           </div>
                           </td>
                          <td class="text-center"><a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn btn-sm "> View Profile </a></td>
                        </tr>

                        @endforeach

                      </tbody>
                    </table>
                    <br>
                    <br>

                </div>
        	</div>

<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable({
            "pageLength": 25,
            "columnDefs": [
                            { "searchable": false, "targets": 4 }
                          ]
        });


    });
</script>


@stop