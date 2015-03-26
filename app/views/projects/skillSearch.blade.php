@extends('...layouts.master')

@section('content')



<div class='row'>

        @include('projects/projectNav')

                <div class="col-md-10 ">
                {{Form::open(array('url' => 'projects/skillSearch'))}}

                            <table class="table table-bordered table-hover ">
                              <thead>
                                <tr>
                                  <th>Select Skills</th>
                                  <th>Skill</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($skills as $skill)
                                <tr>
                                  <td style="width: 200px;"><input type="checkbox" name="skills[{{$skill->id}}]" class="checkbox pull-right" value="{{$skill->name}}"></td>
                                  <td><p class="btn btn-green "><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{$skill->name}}</p></td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                             <br><br><br><br>
                             <div class="text-center">
                                {{Form::submit("Search Projects",array("class" => "btn-lg btn-green"))}}

                             </div>

                {{Form::close()}}
                </div>
</div>


<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>

@stop
