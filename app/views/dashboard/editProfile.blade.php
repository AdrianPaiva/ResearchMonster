@extends('...layouts.master')

@section('content')

<div class="row">
    @include('dashboard/navPartial')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Edit Profile</h3>
          </div>
          <div class="panel-body">

                {{Form::open(array('url' => 'editProfile', 'class' => 'form-horizontal'))}}

                       <div class="form-group">
                                 <img class="img-rounded col-xs-2" src="../images/homer.jpg">

                                {{ Form::text('programName','Program Name',array('class'=>'col-xs-3 col-xs-offset-1')) }}

                                {{ Form::email('email','Email',array('class'=>'col-xs-3 col-xs-offset-1')) }}
                       </div>

                       <a href="#" class="btn btn-sm btn-yellow">Edit Profile Picture</a>
                       <br><br><br>
                       <hr>
                        <h5>About Me</h5>
                       {{ Form::textarea('aboutMe','About Me: here you can provide a summary about yourself.',array('class'=>'col-xs-12', 'id' => 'editor1')) }}
                        <br>
                        <hr>
                        <h5>Experience</h5>
                       {{ Form::textarea('experience','Experience: Here you can list some of your previous experience.',array('class'=>'col-xs-12', 'id' => 'editor2')) }}

                       <div class="col-xs-12">
                              <br>
                              <br>
                              <hr>
                           <h5>Attachments (Maximum 2)</h5>
                           <a href="#" class="btn btn-sm">upload file</a>
                           <br><br><br>
                           <a href="#" class="btn btn-green">example.doc</a>
                           <a href="#" class="btn btn-danger">Delete</a>

                       </div>
                    <br>
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
                        <h6 class="text-center">Select skills for your profile (Maximum 10)</h6>
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

                    {{Form::submit('Edit Profile', array('class' => 'btn btn-yellow center-block'))}}
                {{Form::close()}}

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
                          <h6 class="text-center">To add custom skills, add your skill below then select it from the list to add it your profile.</h6>
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
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
            </script>

            <script type="text/javascript" >
                $(document).ready(function () {
                    $('.skilltable').DataTable();
                });
            </script>

@stop