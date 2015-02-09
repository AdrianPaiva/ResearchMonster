@extends('...layouts.master')

@section('content')

<div class="row">
    @include('dashboard/navPartial')

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
                                        <input id="name" name="name" type="text" placeholder="Project Name" class="form-control">
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
            <div class="col-xs-10 col-xs-offset-2">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Project Skills</h3>
                  </div>
                  <div class="panel-body"><br>

                                		<div class="col-md-4 col-md-offset-4">
                                            <div class="input-group  ">
                                              <input type="text" placeholder="Search Skills"  class="form-control">
                                              <span class="input-group-btn">
                                              <button class="btn btn-default" type="button">
                                                <span class="glyphicon glyphicon-search"></span>
                                              </button>
                                              </span>
                                             </div>
                                        </div> <!-- Search end -->
                                        <br><br><br>


                                  <div class="col-xs-1">
                                      <input type="checkbox" class="checkbox-inline" id="inlineCheckbox1" value="skill1">
                                      <a href="#" class="btn btn-sm btn-success">PHP</a>
                                  </div>

                                    <br>


                          {{Form::submit("Add Project",array("class" => "btn btn-success"))}}
                       {{ Form::close() }}

                  </div>
                </div>
            </div>

    </div>



@stop