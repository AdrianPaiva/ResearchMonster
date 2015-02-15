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
                                                <option value="user" @if($user->role == "user") {{'selected = selected'}} @endif> Standard User</option>
                                                <option value="researcher" @if($user->role == "researcher") {{'selected = selected'}} @endif> Research Department Staff</option>
                                                <option value="admin" @if($user->role == "admin") {{'selected = selected'}} @endif > Admin </option>
                                            </select>

                                            {{Form::submit('Edit Role!', array('class' => 'btn btn-sm btn-yellow pull-right'))}}

                                        {{Form::close()}}
                                  </td>
                                  <td><a href="{{URL::to('users/viewProfile/1')}}" class="btn-sm btn-green pull-right"> View Profile </a></td>

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
        $('.table').DataTable();
    });
</script>

@stop