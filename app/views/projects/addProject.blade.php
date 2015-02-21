@extends('...layouts.master')

@section('content')

<div class="row">
    @include('projects/projectNav')

    <!-- This is for the tags input --->
    <script>
        $.getScript('http://timschlechter.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',function(){

        });
    </script>


    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Project Details</h3>
          </div>
          <div class="panel-body ">

                       {{ Form::open(array('url' => 'addProject', 'class' => 'form-horizontal')) }}

                                    <div class="form-group">
                                      <label class="col-xs-2 control-label" for="name">Name</label>
                                      <div class="col-xs-2">
                                        <input id="name" name="name" type="text" placeholder="Project Name" class="form-control float">
                                      </div>
                                    </div>
                                    <br>
                                 <div class="form-group">
                                   <label class="col-xs-2 control-label" for="summary">Description</label>
                                   <div class="col-xs-10">
                                     <textarea class="form-control" id="summary" name="summary" placeholder="Please enter the project description here:" rows="7"></textarea>
                                   </div>
                                 </div>

                                <br>

                                     <div class="form-group">
                                       <label class="col-xs-2 control-label" for="experience">Experience Required</label>
                                       <div class="col-xs-10">
                                         <textarea class="form-control" id="experience" name="experience" placeholder="Please enter the required experience for your project here:" rows="7"></textarea>
                                       </div>
                                     </div>

                            <br>
                                     <div class="form-group">
                                       <label class="col-xs-2 control-label" for="experience">Skills Required</label>
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




                        {{Form::submit("Add Project",array("class" => "btn btn-green center-block"))}}
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