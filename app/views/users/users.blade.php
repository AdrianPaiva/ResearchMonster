@extends('...layouts.master')

@section('content')

<div class="row">

        @include('users/userNav')
           <div class="col-xs-10 ">
                    <table id="table" class="table table-bordered table-striped table-responsive table-hover ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Skills</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>100888999</td>
                          <td>Column content</td>
                          <td>Column content</td>
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
                          <td><a href="users/viewProfile/1" class="btn-sm btn-green pull-right"> View Profile </a></td>
                        </tr>

                      </tbody>
                    </table>
                    <br>
                    <br>

                </div>
        	</div>

<script type="text/javascript" >
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>


@stop