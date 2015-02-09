@extends('...layouts.master')

@section('content')

<div class="row">
    @include('projects/projectNav')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Project Details</h3>
          </div>
          <div class="panel-body ">

                       {{ Form::open(array('url' => 'addProject', 'class' => 'form-horizontal')) }}

                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="name">Name</label>
                                      <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Project Name" class="form-control float">
                                      </div>
                                    </div>
                                    <br>
                                 <div class="form-group">
                                   <label class="col-md-3 control-label" for="summary">Description</label>
                                   <div class="col-md-9">
                                     <textarea class="form-control" id="summary" name="summary" placeholder="Please enter the project description here:" rows="7"></textarea>
                                   </div>
                                 </div>

                                <br>

                                     <div class="form-group">
                                       <label class="col-md-3 control-label" for="summary">Experience Required</label>
                                       <div class="col-md-9">
                                         <textarea class="form-control" id="summary" name="summary" placeholder="Please enter the required experience for your project here:" rows="7"></textarea>
                                       </div>
                                     </div>

                            <br>




          </div>
        </div>
    </div>
</div>
    <div class="row">
            <div class="col-xs-5 col-xs-offset-2">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Project Skills</h3>
                  </div>
                  <div class="panel-body"><br>

                    <table id="skilltable" class="table table-striped table-hover ">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Skill</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="checkbox pull-right" value=""></td>
                          <td><p class="btn btn-sm btn-success">PHP</p></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="checkbox pull-right" value=""></td>
                          <td><p class="btn btn-sm btn-success">MYSQL</p></td>
                        </tr>
                      </tbody>
                    </table>

                        <br><br><br>
                          {{Form::submit("Add Project",array("class" => "btn btn-success center-block"))}}
                       {{ Form::close() }}

                  </div>
                </div>
            </div>

            <div class="col-xs-5">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Add Skills</h3>
                  </div>
                  <div class="panel-body"><br>


                  </div>
                </div>
            </div>

    </div>


<script>
    $('.float').jvFloat();
</script>

<script type="text/javascript" >
    $(document).ready(function () {
        $('#skilltable').DataTable();
    });
</script>
@stop