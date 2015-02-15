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

                                  </td>
                                  <td><a href="users/viewProfile/1" class="btn-sm btn-green pull-right"> View Profile </a></td>
                                </tr>

                            @endforeach

                      </tbody>
                    </table>
                    <br>
                    <br>

                </div>
        	</div>
</div>


<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>

@stop
