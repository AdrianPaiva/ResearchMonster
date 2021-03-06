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

                {{Form::model($profile, array('url' => 'dashboard/editProfile', 'class' => 'form-horizontal', 'files' => true))}}

                       <div class="form-group">
                                 <img class="img-rounded col-xs-2" src="{{$profile->picture}}">
                                {{Form::label("Program name:")}}
                                {{ Form::text('program',$profile->program,array('class'=>' col-xs-offset-1')) }}
                                {{Form::label("(e.g. T127 Programmer Analyst)")}}
                       </div>

                        <span class="btn btn-file"> Upload Profile Picture
                          {{Form::file('image')}}
                         </span>
                       <br><br><br>
                       <hr>

                        <h5>About Me</h5>
                       {{ Form::textarea('summary',$profile->summary,array('class'=>'col-xs-12', 'id' => 'editor1')) }}

                        <br>
                        <hr>
                        <h5>Experience</h5>
                       {{ Form::textarea('experience',$profile->experience,array('class'=>'col-xs-12', 'id' => 'editor2')) }}

                        <hr>
                        <h5>Skills</h5>
                        <br><br>

                       <div class="form-group">

                                       <div class="input-group-lg col-xs-10">
                                           <input type="text" name="tags"  placeholder="Enter your skill and press enter" class="tm-input form-control"/>

                                       </div>
                        </div>


                       <div class="col-xs-12">
                              <br>
                              <br>
                              <hr>
                           <h5>Attachments</h5>

                           <span class="btn btn-file"> Upload File
                                   {{Form::file('file')}}
                           </span>
                           <br><br><br>

                            @if($profile->attachment1 != null)
                                                   <p class="btn btn-yellow">{{ link_to($profile->attachment1, $profile->attachment2) }}</p>

                            @endif

                       </div>


                    <br>
                    <br>
                    @if($errors->has())
                                        <ul>
                                            @foreach($errors->all() as $message)

                                                <li class="text-danger">{{ $message }}</li>

                                            @endforeach
                                    </ul>
                    @endif

                    {{Form::submit('Edit Profile', array('class' => 'btn btn-primary center-block'))}}
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

                <?php
                    $values = array();
                            foreach ($skills as $item) {
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