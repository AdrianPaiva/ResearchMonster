@extends('...layouts.master')

@section('content')

<div class='row'>
    @include('projects/projectNav')

    <div class="col-xs-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Project Name</h3>
          </div>
          <div class="panel-body">

            <div class="row">

                <div class="col-xs-6">
                      <p><strong>Posted By:</strong> Name here</p>
                      <p><strong>Date Posted:</strong> January 1 2014</p>
                </div>

                <div class="col-xs-6">
                     <a href="#" class="btn-lg btn-success ">Apply</a>
                     <a href="#" class="btn-lg btn-warning ">Edit</a>
                     <a href="#" class="btn-lg btn-danger  ">Delete</a>
                     <br>
                     <br>
                     <a href="#" class="btn-lg btn-info ">Recommend Student</a>
                </div>

            </div>


             <hr>
             <strong><p><u>Project Description</u></p></strong>

             <p>
                Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id
                quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.
                Nulla wisi laoreet suspendisse hendrerit facilisi, mi mattis pariatur adipiscing aliquam pharetra eget. Aenean urna
                ipsum donec tellus tincidunt, quam curabitur metus, pretium purus facilisis enim id, integer eleifend vitae volutpat consequat per leo.
                Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada,
                integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.
             </p>
             <hr>
              <strong><p><u>Experience Required</u></p></strong>

                          <p>
                             Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id
                             quisque ac. Arcu massa vestibulum malesuada, integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.
                             Nulla wisi laoreet suspendisse hendrerit facilisi, mi mattis pariatur adipiscing aliquam pharetra eget. Aenean urna
                             ipsum donec tellus tincidunt, quam curabitur metus, pretium purus facilisis enim id, integer eleifend vitae volutpat consequat per leo.
                             Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu massa vestibulum malesuada,
                             integer vivamus elit eu mauris eu, cum eros quis aliquam nisl wisi.
                          </p>

          </div>
        </div>



    </div>



</div>

<div class="row">

            <div class="col-xs-5 col-xs-offset-2">
                <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title text-center">Skills</h3>
                          </div>
                     <div class="panel-body">
                        <p class="btn btn-sm btn-success">PHP</p>
                        <p class="btn btn-sm btn-success">MYSQL</p>
                        <p class="btn btn-sm btn-success">PHP</p>
                        <p class="btn btn-sm btn-success">MYSQL</p>
                     </div>
                 </div>
            </div>


            <div class="col-xs-5">
                <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title text-center">Attachments</h3>
                          </div>
                     <div class="panel-body">

                     </div>
                 </div>
            </div>
</div>

@stop
