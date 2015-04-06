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

                       {{ Form::model($project,array('url' => 'projects/editProject/'.$project->id, 'class' => 'form-horizontal', 'files' => true)) }}

                                    <div class="form-group">
                                      <label class="col-xs-2 control-label lead" for="name">Name</label>
                                      <div class="col-xs-2">

                                        {{ Form::text('name',$project->name,array('class'=>' form-control')) }}
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                                                           <label class="col-xs-2 control-label lead" for="centre">Centre</label>
                                                                             <div class="col-xs-2">
                                                                                  <select name="centre" id="centre">
                                                                                    <option value="Health Sciences" @if($project->centre == "Health Sciences") {{'selected = selected'}} @endif>Health Sciences</option>
                                                                                    <option value="Continuous Learning" @if($project->centre == "Continuous Learning") {{'selected = selected'}}@endif>Continuous Learning</option>
                                                                                    <option value="International" @if($project->centre == "International") {{'selected = selected'}}@endif>International</option>
                                                                                    <option value="Preparatory and Liberal Studies" @if($project->centre == "Preparatory and Liberal Studies") {{'selected = selected'}}@endif> Preparatory and Liberal Studies</option>
                                                                                    <option value="Arts and Design" @if($project->centre == "Arts and Design") {{'selected = selected'}}@endif>Arts and Design</option>
                                                                                    <option value="Community Services & Early Childhood" @if($project->centre == "Community Services & Early Childhood") {{'selected = selected'}}@endif>Community Services & Early Childhood</option>
                                                                                    <option value="Hospitality and Culinary Arts" @if($project->centre == "Hospitality and Culinary Arts") {{'selected = selected'}}@endif>Hospitality and Culinary Arts</option>
                                                                                    <option value="Construction and Engineering Technologies" @if($project->centre == "Construction and Engineering Technologies") {{'selected = selected'}}@endif>Construction and Engineering Technologies</option>
                                                                                    <option value="Business" @if($project->centre == "Business") {{'selected = selected'}}@endif>Business</option>
                                                                                  </select>
                                                                             </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                                                            <label class="col-xs-2 control-label lead" for="projectPartner">Project Partner</label>
                                                                           <div class="col-xs-2">

                                                                                     {{ Form::text('projectPartner',$project->projectPartner,array('class'=>' form-control float')) }}
                                                                            </div>
                                    </div>
                                    <br>
                                 <div class="form-group">
                                   <label class="col-xs-2 control-label lead" for="summary">Description</label>
                                   <div class="col-xs-10">
                                     {{ Form::textarea('summary',$project->summary,array('class'=>'col-xs-12', 'id' => 'summary')) }}
                                   </div>
                                 </div>

                                <br>

                                     <div class="form-group">
                                       <label class="col-xs-2 control-label lead" for="experience">Experience Required</label>
                                       <div class="col-xs-10">
                                         {{ Form::textarea('experience',$project->experience,array('class'=>'col-xs-12', 'id' => 'experience')) }}
                                       </div>
                                     </div>

                            <br>

                        <div class="form-group">
                              <label class="col-xs-2 control-label lead" for="skills">Skills Required</label>
                              <div class="input-group-lg col-xs-10" id="skills">
                                    <input type="text" name="tags"  placeholder="Enter your skill and press enter" class="tm-input form-control"/>

                              </div>
                         </div><br><br>


                            <div class="form-group">
                                <label class="col-xs-2 control-label lead">Attachment</label>
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
    $values = array();
                                foreach ($project->skills as $item) {
                                    $values[] = $item->name;
                                }
            $js_array = json_encode($values);
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