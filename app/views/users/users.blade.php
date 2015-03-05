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
                          <td>{{$user->program or "No Program Selected"}}</td>
                          <td>
                             <div class="btn-group">
                                <a href="#" class="btn btn-default">MYSQL</a>
                                <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                      <li><a href="#">Skill</a></li>
                                       <li><a href="#">Skill</a></li>
                                        <li><a href="#">Skill</a></li>
                                       <li><a href="#">Skill</a></li>
                                    </ul>
                             </div>
                           </td>
                          <td><a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn-sm btn-green pull-right"> View Profile </a></td>
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
        $('.table').DataTable();
    });
</script>


@stop