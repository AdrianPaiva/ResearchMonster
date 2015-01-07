@extends('...layouts.master')

@section('content')

<div class='row'>

       <div class='col-md-2'>

           <div class='list-group'>
             <a href="#" style="color:white" class="list-group-item btn-success disabled">Projects </a>
             <a href="#" class="list-group-item active">All Projects </a>
             <a href="#" class="list-group-item">Recently Added </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
           <br>
              <a href="#" style="color:white" class="list-group-item btn-success disabled">My Projects </a>
              <a href="#" class="list-group-item">All My Projects </a>
              <a href="#" class="list-group-item">Recent Projects </a>
              <a href="#" class="list-group-item">Recommended Projects </a>

          </div>
       </div>

        <div class="container">
        	<div class="row">
        		<div class="col-md-3 col-md-offset-3">
                    <div class="input-group  ">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search "></span>
                      </button>
                      </span>
                     </div><!-- /input-group -->
                </div>

                <br>
                <br>
                <br>
                <br>

                <div class="col-md-10 ">
                    <table class="table table-striped table-hover ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Posted By</th>
                          <th>Date Posted</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td><a href="#" class="btn-lg btn-success pull-right"> View  </a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td><a href="#" class="btn-lg btn-success pull-right"> View  </a></td>
                        </tr>

                      </tbody>
                    </table>

                </div>
        	</div>
        </div>



</div>



@stop
