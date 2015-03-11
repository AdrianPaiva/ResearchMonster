@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('admin/adminNav')

           <div class="col-xs-10 ">
                    <table class="table table-bordered table-striped table-responsive table-hover ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Edit Role</th>
                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>

                            @foreach($users as $user)
                                <tr>
                                  <td>{{$user->userId}}</td>
                                  <td>{{$user->profile->firstName}} {{$user->profile->lastName}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>
                                        {{Form::open(array('url' => '/admin/editRole'))}}

                                            {{ Form::hidden('userId', $user->userId) }}

                                            <select name="role" class="form-control">
                                                <option value="student" @if($user->role == "student") {{'selected = selected'}} @endif> Student</option>
                                                <option value="researcher" @if($user->role == "researcher") {{'selected = selected'}} @endif> Research Department Staff</option>
                                                <option value="admin" @if($user->role == "admin") {{'selected = selected'}} @endif > Admin </option>
                                                <option value="professor" @if($user->role == "professor") {{'selected = selected'}} @endif > Professor </option>
                                            </select>

                                            {{Form::submit('Edit Role!', array('class' => 'btn btn-sm btn-yellow pull-right'))}}

                                        {{Form::close()}}
                                  </td>
                                  <td class="text-center">
                                    @if($user->isStudent())
                                        <a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn-sm btn-green"> View Profile </a>
                                    @endif
                                  </td>

                                </tr>

                            @endforeach

                      </tbody>
                    </table>
                    <br>
                    <br>

                </div>


        	</div>
</div>

@if(Session::has('message'))
                <h4 class="alert alert-success text-center">{{ Session::get('message') }}</h4>
@endif

<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable({
            "pageLength": 25
        });
    });
</script>

@stop
