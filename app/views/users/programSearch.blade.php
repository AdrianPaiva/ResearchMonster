@extends('...layouts.master')

@section('content')

<div class="row">

        @include('users/userNav')
           <div class="col-xs-10 ">
                           {{Form::open(array('url' => 'users/programSearch'))}}

                                       <table class="table table-bordered table-hover ">
                                         <thead>
                                           <tr>
                                             <th>Select Programs</th>
                                             <th>Program</th>
                                           </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($programs as $program)
                                           @if($program->program != "")
                                           <tr>
                                             <td style="width: 200px;"><input type="checkbox" name="programs[]" class="checkbox pull-right" value="{{$program->program}}"></td>
                                             <td><p class="btn btn-green "><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{$program->program}}</p></td>
                                           </tr>
                                           @endif
                                         @endforeach
                                         </tbody>
                                       </table>
                                        <br><br><br><br>
                                        <div class="text-center">
                                           {{Form::submit("Search Users",array("class" => "btn-lg btn-green"))}}

                                        </div>

                           {{Form::close()}}
           </div>

<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>


@stop