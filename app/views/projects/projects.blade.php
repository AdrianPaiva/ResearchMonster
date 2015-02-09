@extends('...layouts.master')

@section('content')

<script src="../dataTables.js"></script>

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
                    <table id="myTable" class="table table-striped table-hover ">
                      <thead>
                        <tr>

                          <th>Name</th>
                          <th>Posted By</th>
                          <th>Date Posted</th>
                          <th>Required Skills</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">PHP</a>
                              <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Skill</a></li>
                              </ul>
                            </div>
                          </td>
                          <td><a href="projects/viewProject/1" class="btn-sm btn-success pull-right"> View Project </a></td>
                        </tr>

                                                <tr>

                                                  <td>Column content</td>
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
                                                  <td><a href="projects/viewProject/1" class="btn-sm btn-success pull-right"> View Project </a></td>
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
    <div class="pager2 text-center col-xs-5 col-xs-offset-4">
                              <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                              </ul>
    </div>


</div>


@stop
