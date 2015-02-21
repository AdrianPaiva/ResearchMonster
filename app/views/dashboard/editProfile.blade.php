@extends('...layouts.master')

@section('content')

    <script>
        $.getScript('http://timschlechter.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',function(){

        });
    </script>

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

                        <hr>
                        <h5>Skills</h5>
                        <br><br>
                       <div class="form-group">

                                       <div class="input-group-lg col-xs-10">
                                           <select multiple="multiple" data-role="tagsinput">
                                            <div class="btn btn-yellow"></div>
                                             <option value="Amsterdam">Amsterdam</option>
                                             <option value="Washington">Washington</option>
                                             <option value="Sydney">Sydney</option>
                                             <option value="Beijing">Beijing</option>
                                             <option value="Cairo">Cairo</option>
                                           </select>
                                           <span class="btn btn-sm btn-default">Add Skill</span>
                                       </div>
                        </div>

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

                    {{Form::submit('Edit Profile', array('class' => 'btn btn-yellow center-block'))}}
                {{Form::close()}}

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