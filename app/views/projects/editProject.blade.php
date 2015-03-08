@extends('...layouts.master')

@section('content')

<div class="row">
    @include('projects/projectNav')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Edit {{$project->name}}</h3>
          </div>
          <div class="panel-body ">

                       {{ Form::model($project,array('url' => 'projects/editProject/'.$project->id, 'class' => 'form-horizontal')) }}

                                    <div class="form-group">
                                      <label class="col-xs-2 control-label" for="name">Name</label>
                                      <div class="col-xs-2">

                                        {{ Form::text('name',$project->name,array('class'=>' form-control')) }}
                                      </div>
                                    </div>
                                    <br>
                                 <div class="form-group">
                                   <label class="col-xs-2 control-label" for="summary">Description</label>
                                   <div class="col-xs-10">
                                     {{ Form::textarea('summary',$project->summary,array('class'=>'col-xs-12', 'id' => 'summary')) }}
                                   </div>
                                 </div>

                                <br>

                                     <div class="form-group">
                                       <label class="col-xs-2 control-label" for="experience">Experience Required</label>
                                       <div class="col-xs-10">
                                         {{ Form::textarea('experience',$project->experience,array('class'=>'col-xs-12', 'id' => 'experience')) }}
                                       </div>
                                     </div>

                            <br>

                        <div class="form-group">
                              <label class="col-xs-2 control-label" for="skills">Skills Required</label>
                              <div class="input-group-lg col-xs-10" id="skills">
                                    <input type="text" name="tags"  placeholder="Enter your skill and press enter" class="tm-input form-control"/>

                              </div>
                         </div><br><br>


                            <div class="form-group">
                                <label class="col-xs-2 control-label">Attachment</label>
                               <span class="btn btn-file input-group" > Upload File
                                       {{Form::file('file')}}
                                </span>
                            </div>

                            @if($project->attachment != null)
                                   <p class="btn btn-yellow">{{ link_to($project->attachment, $project->attachmentName) }}</p>
                             @endif



                    @if($errors->has())
                                        <ul>
                                            @foreach($errors->all() as $message)

                                                <li class="text-danger">{{ $message }}</li>

                                            @endforeach
                                    </ul>
                    @endif


                        {{Form::submit("Edit Project",array("class" => "btn btn-green center-block"))}}
                       {{ Form::close() }}

          </div>
        </div>
    </div>
</div>




<script>
     CKEDITOR.replace( 'summary' );
     CKEDITOR.replace( 'experience' );

    <?php
            $js_array = json_encode(unserialize($project->skills));
             echo "var array = ". $js_array;
    ?>

                    jQuery(".tm-input").tagsManager(
                    {
                        prefilled:array,
                        maxTags: 20
                    }
                    );
</script>



@stop