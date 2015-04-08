@extends('...layouts.master')

@section('content')

<div class="row">
    @include('projects/projectNav')

    <div class="col-xs-10">

            {{Form::open(array('url' => 'projects/recommend/'.$project->id ))}}

                 <table class="table table-bordered table-striped table-responsive table-hover ">
                      <thead>
                        <tr>
                          <th>Select Student(s)</th>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Program</th>
                          <th>Skills</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($users as $user)

                        <tr>
                          <td>
                            <div class="btn-group">

                                <input type="checkbox" name="check[]" class="btn" style="" value="{{$user->userId}}"/>
                            </div>

                          </td>
                          <td>{{$user->userId}}</td>
                          <td>{{$user->profile->firstName}} {{$user->profile->lastName}}</td>
                          <td>{{$user->profile->program or "No Program Selected"}}</td>
                          <td>
                          <div class="text-center">
                             <div class="btn-group">
                                <a href="#" class="btn btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Skills</a>
                                <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                   <ul class="dropdown-menu">


                                        @foreach($user->skills as $skill)

                                           <p class="btn btn-sm btn-green"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{$skill->name}}</p>
                                        @endforeach

                                    </ul>
                             </div>
                           </div>
                           </td>
                          <td class="text-center"><a href="{{URL::to('users/viewProfile/'. $user->userId)}}" class="btn-sm btn-green"> View Profile </a></td>
                        </tr>

                        @endforeach

                      </tbody>
                 </table>

                {{Form::submit('Recommend Students',array('class' => 'btn btn-primary center-block'))}}
            {{Form::close()}}

            @if(Session::has('message'))
            <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
            @endif

    </div>
</div>

<script type="text/javascript" >
    $(document).ready(function () {
        $('.table').DataTable({
            "pageLength": 25,
            "columnDefs": [
                            { "searchable": false, "targets": 5 }
                          ]
        });


    });
</script>
@stop

