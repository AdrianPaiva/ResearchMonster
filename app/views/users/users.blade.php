@extends('...layouts.master')

@section('content')

<div class='row'>

       <div class='col-md-2'>


           <div class='list-group'>
           <a style="color:white" class="list-group-item btn-success disabled">Users </a>
             <a href="#" class="list-group-item active">All Users </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
           </div>
           <br>

       </div>

        <div class="container">
        	<div class="row">
        		<div class="col-md-3 col-md-offset-3">
                    <div class="input-group  ">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
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
                          <th>Column heading</th>
                          <th>Column heading</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td><a href="#" class="btn-lg btn-success pull-right"> View Profile </a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td>Column content</td>
                          <td><a href="#" class="btn-lg btn-success pull-right"> View Profile </a></td>
                        </tr>

                      </tbody>
                    </table>

                </div>
        	</div>
        </div>



</div>

@stop