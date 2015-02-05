@extends('...layouts.master')

@section('content')

<div class='row'>

        @include('projects/projectNav')

        <div class="container">
        	<div class="row">
        		<div class="col-md-3 col-md-offset-3">

                    <div class="input-group">
                      <input type="text" placeholder="Search Projects" class="form-control">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search "></span>
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
                          <th>#</th>
                          <th>Name</th>
                          <th>Posted By</th>
                          <th>Date Posted</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td><a href="projects/viewProject/1" class="btn-sm btn-success pull-right"> View Project </a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td><a href="#" class="btn-sm btn-success pull-right"> View Project </a></td>
                        </tr>


                      </tbody>
                    </table>
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
