@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('projects/projectNav')

                <div class="col-md-10 ">
                    <table id="table" class="table table-bordered table-striped table-responsive table-hover ">
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
                        <tr>

                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>

                            <div class="btn-group">
                              <a href="#" class="btn btn-default">PHP</a>
                              <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Java</a></li>
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Skill</a></li>
                              </ul>
                            </div>

                          </td>
                          <td><a href="projects/viewProject/1" class="btn-sm btn-green pull-right"> View Project </a></td>
                        </tr>
                         <tr>

                           <td>Adrian Project</td>
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
                           <td><a href="projects/viewProject/1" class="btn-sm btn-green pull-right"> View Project </a></td>
                         </tr>


                      </tbody>
                    </table>

                </div>
</div>


<script type="text/javascript" >
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>

@stop
