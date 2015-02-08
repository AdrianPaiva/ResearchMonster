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
                     <a href="#" class="btn-sm btn-success ">Apply</a>
                     <a href="#" class="btn-sm btn-warning ">Edit</a>
                     <a href="#" class="btn-sm btn-danger  ">Delete</a>

                     <a href="#" class="btn-sm btn-info ">Recommend Student</a>
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
                <hr>
              <strong><p><u>Skills</u></p></strong>
                <p class="btn btn-sm btn-success">PHP</p>
                <p class="btn btn-sm btn-success">MYSQL</p>
                <p class="btn btn-sm btn-success">PHP</p>
                <p class="btn btn-sm btn-success">MYSQL</p>

                <br><br>
          </div>
        </div>



    </div>



</div>

<hr>

<div class="row">

            <div class="col-xs-10 col-xs-offset-2">


            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title text-center">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Users in Project Name
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">

                                                <table class="table table-striped table-hover ">
                                                                      <thead>
                                                                        <tr>
                                                                          <th>ID</th>
                                                                          <th>Name</th>
                                                                          <th>Email</th>

                                                                        </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                        <tr>
                                                                          <td>100888999</td>
                                                                          <td>Column content</td>
                                                                           <td>Column content</td>

                                                                          <td>
                                                                            <a href="#" class="btn btn-sm btn-danger pull-right"> Remove User </a>
                                                                            <a href="/users/viewProfile/1" class="btn btn-sm btn-success pull-right "> View Profile </a>
                                                                          </td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>20000000</td>
                                                                          <td>Column content</td>
                                                                          <td>Column content</td>
                                                                            <td>
                                                                               <a href="#" class="btn btn-sm btn-danger pull-right"> Remove User </a>
                                                                               <a href="/users/viewProfile/1" class="btn btn-sm btn-success pull-right "> View Profile </a>
                                                                            </td>

                                                                        </tr>

                                                                      </tbody>
                                                                    </table>

                  </div>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title text-center">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Recommended Users
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">

                                                <table class="table table-striped table-hover ">
                                                                      <thead>
                                                                        <tr>
                                                                          <th>ID</th>
                                                                          <th>Name</th>
                                                                          <th>Email</th>

                                                                        </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                        <tr>
                                                                          <td>100888999</td>
                                                                          <td>Column content</td>
                                                                           <td>Column content</td>

                                                                          <td>

                                                                            <a href="/users/viewProfile/1" class="btn btn-sm btn-success pull-right "> View Profile </a>
                                                                          </td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>20000000</td>
                                                                          <td>Column content</td>
                                                                          <td>Column content</td>
                                                                            <td>

                                                                               <a href="/users/viewProfile/1" class="btn btn-sm btn-success pull-right "> View Profile </a>
                                                                            </td>

                                                                        </tr>

                                                                      </tbody>
                                                                    </table>

                  </div>
                </div>
              </div>

            </div>

            </div>

</div>

@stop
