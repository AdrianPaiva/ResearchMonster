@extends('...layouts.master')

@section('content')

<div class='row'>


        @include('users/userNav')

        <div class="container">
        	<div class="row">
        		<div class="col-md-3 col-md-offset-3">
                    <div class="input-group  ">
                      <input type="text" placeholder="Search Users"  class="form-control">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                      </span>
                     </div><!-- /input-group -->
                </div>

                <br>
                <br>
                <br>
                <br>

                <div class="col-md-10 ">
                    <table class="table table-striped table-hover ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Program</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>100888999</td>
                          <td>Column content</td>
                          <td>Column content</td>

                          <td><a href="users/viewProfile/1" class="btn-sm btn-success pull-right"> View Profile </a></td>
                        </tr>
                        <tr>
                          <td>20000000</td>
                          <td>Column content</td>
                          <td>Column content</td>

                          <td><a href="users/viewProfile/1" class="btn-sm btn-success pull-right"> View Profile </a></td>
                        </tr>

                      </tbody>
                    </table>
                    <br>
                    <br>
                    <br>




                </div>
        	</div>
        </div>



</div>

<div class="row">
    <div class="pager2 text-center">
                                           <ul class="pagination pagination-lg">
                                             <li><a href="#">«</a></li>
                                             <li class="active"><a href="#">1</a></li>
                                             <li><a href="#">2</a></li>
                                             <li><a href="#">3</a></li>
                                             <li><a href="#">»</a></li>
                                           </ul>
                       </div>
</div>

@stop