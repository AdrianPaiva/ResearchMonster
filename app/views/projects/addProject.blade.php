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
                                       <label class="col-md-3 control-label" for="experience">Experience Required</label>
                                       <div class="col-md-9">
                                         <textarea class="form-control" id="experience" name="experience" placeholder="Please enter the required experience for your project here:" rows="7"></textarea>
                                       </div>
                                     </div>

                            <br>



          </div>
        </div>
    </div>
</div>
    <div class="row">
            <div class="col-xs-6 col-xs-offset-2">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Project Skills</h3>
                  </div>
                  <div class="panel-body"><br>
                        <h6 class="text-center">Select the required skills for your project (Maximum 10)</h6>
                        <br>

                    <table class="table table-bordered table-hover skilltable ">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Skill</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="checkbox pull-right" value=""></td>
                          <td><p class="btn btn-sm btn-green">PHP</p></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="checkbox pull-right" value=""></td>
                          <td><p class="btn btn-sm btn-green">MYSQL</p></td>
                        </tr>
                      </tbody>
                    </table>

                        <br><br><br>
                          {{Form::submit("Add Project",array("class" => "btn btn-green center-block"))}}
                       {{ Form::close() }}

                  </div>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Add Skills</h3>
                  </div>
                  <div class="panel-body"><br>

                      {{ Form::open(array('url' => 'addSkill', 'class' => 'form-horizontal')) }}
                          <h6 class="text-center">To add custom skills, add your skill below then select it from the list to add it your project.</h6>
                          <br>
                          {{ Form::text('skillName','', array('class' => "form-control float ",'placeholder' => "Skill Name")) }}

                          <br>
                          {{Form::submit("Add Skill",array("class" => "btn btn-green center-block"))}}
                      {{ Form::close() }}

                  </div>
                </div>
            </div>

    </div>


<script>
    $('.float').jvFloat();
</script>

<script type="text/javascript" >
    $(document).ready(function () {
        $('.skilltable').DataTable();
    });
</script>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'summary' );
                CKEDITOR.replace( 'experience' );
            </script>

@stop