@extends('...layouts.master')

@section('content')

<div class="row">
    @include('projects/projectNav')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Add Project</h3>
          </div>
          <div class="panel-body ">

                       {{ Form::open(array('url' => 'projects/addProject', 'class' => 'form-horizontal','files' => true)) }}

                                    <div class="form-group">
                                      <label class="col-xs-2 control-label lead" for="name">Name</label>
                                      <div class="col-xs-2">
                                        <input id="name" name="name" type="text" placeholder="Project Name" class="form-control float">
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                       <label class="col-xs-2 control-label lead" for="centre">Centre</label>
                                         <div class="col-xs-2">
                                              <select name="centre" id="centre">
                                                <option value="Health Sciences">Health Sciences</option>
                                                <option value="Continuous Learning">Continuous Learning</option>
                                                <option value="International">International</option>
                                                <option value="Preparatory and Liberal Studies"> Preparatory and Liberal Studies</option>
                                                <option value="Arts and Design">Arts and Design</option>
                                                <option value="Community Services & Early Childhood">Community Services & Early Childhood</option>
                                                <option value="Hospitality and Culinary Arts">Hospitality and Culinary Arts</option>
                                                <option value="Construction and Engineering Technologies">Construction and Engineering Technologies</option>
                                                <option value="Business">Business</option>
                                              </select>
                                         </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-xs-2 control-label lead" for="projectPartner">Project Partner</label>
                                       <div class="col-xs-2">
                                                 <input id="projectPartner" name="projectPartner" type="text" placeholder="Project Partner" class="form-control float">
                                        </div>
                                     </div>
                                     <br>
                                 <div class="form-group">
                                   <label class="col-xs-2 control-label lead" for="summary">Description</label>
                                   <div class="col-xs-10">
                                     <textarea class="form-control" id="summary" name="summary" placeholder="Please enter the project description here:" rows="7"></textarea>
                                   </div>
                                 </div>

                                <br>

                                     <div class="form-group">
                                       <label class="col-xs-2 control-label lead" for="experience">Experience Required</label>
                                       <div class="col-xs-10">
                                         <textarea class="form-control" id="experience" name="experience" placeholder="Please enter the required experience for your project here:" rows="7"></textarea>
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



                    @if($errors->has())
                                        <ul>
                                            @foreach($errors->all() as $message)

                                                <li class="text-danger">{{ $message }}</li>

                                            @endforeach
                                    </ul>
                    @endif


                        {{Form::submit("Add Project",array("class" => "btn btn-green center-block"))}}
                       {{ Form::close() }}

          </div>
        </div>
    </div>
</div>


<script type="text/javascript">

  CKEDITOR.replace( 'summary' );
  CKEDITOR.replace( 'experience' );

</script>

<script type="text/javascript">
     jQuery(".tm-input").tagsManager(
          {
              maxTags: 20
          }
           );
</script>


@stop