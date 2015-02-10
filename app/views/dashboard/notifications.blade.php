@extends('...layouts.master')

@section('content')

<div class='row'>

    @include('dashboard/navPartial')

        <div class="col-xs-10">

            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-center">Notifications</h3>
              </div>
              <div class="panel-body">
                            	<div class="row">
                                    <div class="col-xs-12 ">
                                        <div class="alert alert-dismissable alert-custom jumbotron">
                                          <button type="button" class="close" data-dismiss="alert">×</button>
                                          <h4>Notification</h4>
                                          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, </p>
                                          <br>
                                          <a href="" class="btn btn-success col-xs-offset-9"> Accept</a>
                                          <a href="" class="btn btn-danger  "> Deny</a>
                                        </div>

                                        <div class="alert alert-dismissable alert-custom jumbotron">
                                                              <button type="button" class="close" data-dismiss="alert">×</button>
                                                              <h4>Notification</h4>
                                                              <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, </p>
                                                              <br>
                                                              <a href="" class="btn btn-success col-xs-offset-9"> Accept</a>
                                                              <a href="" class="btn btn-danger  "> Deny</a>
                                                            </div>

                                        <div class="alert alert-dismissable alert-custom jumbotron">
                                                              <button type="button" class="close" data-dismiss="alert">×</button>
                                                              <h4>Notification</h4>
                                                              <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, .</p>
                                                            </div>

                                    </div>
                            	</div>
              </div>
            </div>

        </div>





</div>
@stop