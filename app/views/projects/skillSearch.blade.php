@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('projects/projectNav')

                <div class="col-md-10 ">
                            <table class="table table-bordered table-hover ">
                              <thead>
                                <tr>
                                  <th>Select Skills</th>
                                  <th>Skill</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="checkbox" class="checkbox pull-right" value=""></td>
                                  <td><p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> PHP</p></td>
                                </tr>
                                <tr>
                                  <td><input type="checkbox" class="checkbox pull-right" value=""></td>
                                  <td><p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> PHP</p></td>
                                </tr>
                              </tbody>
                            </table>
                             <br><br><br><br>
                             <div class="text-center">
                                <a href="" class="btn-lg btn-green">Search Projects</a>
                             </div>


                </div>
</div>


<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>

@stop
