@extends('...layouts.master')

@section('content')

<div class='row'>

    @include('dashboard/navPartial')

        <div class="container">
        	<div class="row">
                <div class="col-md-10 ">
                    <div class="alert alert-dismissable alert-info">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <h4>Notification</h4>
                      <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, </p>
                      <br>
                      <a href="" class="btn btn-primary col-xs-offset-9"> Accept</a>
                      <a href="" class="btn btn-primary  "> Deny</a>
                    </div>

                    <div class="alert alert-dismissable alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <h4>Notification</h4>
                      <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, .</p>
                    </div>

                    <div class="alert alert-dismissable alert-danger">
                                          <button type="button" class="close" data-dismiss="alert">×</button>
                                          <h4>Notification</h4>
                                          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, </p>
                                          <br>
                                          <a href="" class="btn btn-primary col-xs-offset-9"> Accept</a>
                                          <a href="" class="btn btn-primary  "> Deny</a>
                                        </div>

                    <div class="alert alert-dismissable alert-warning">
                                          <button type="button" class="close" data-dismiss="alert">×</button>
                                          <h4>Notification</h4>
                                          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, .</p>
                                        </div>

                </div>
        	</div>
        </div>



</div>
@stop