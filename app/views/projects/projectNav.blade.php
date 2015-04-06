<div class='col-xs-2 col-sm-2 col-md-2'>

    <?php
            $page = Route::current()->getUri();

            $skills = DB::table('skills')
                        ->select(DB::raw('count(*) as count, name,id'))
                        ->groupBy('name')
                        ->orderBy('count', 'desc')
                        ->take(10)->get();

            $projectSkills = DB::table('project_skills')
                                ->select('*')
                                ->get();
             foreach($skills as $index => $skill)
             {
                foreach($projectSkills as $projectSkill)
                {
                    if(!$skill->id == $projectSkill->skill_id)
                    {
                        unset($skills[$index]);
                    }
                }
             }

        ?>

           <div class='list-group'>
             <p  class="list-group-item btn btn-green">Projects</p>
             <a href="/projects"  class="list-group-item @if( $page == "projects") {{'active'}} @endif">All Projects</a>

             <a href="/projects/skillSearch" class="list-group-item @if( $page == "projects/skillSearch") {{'active'}} @endif" >Project Skills</a>
           <br>
              @if(Auth::user()->canCreateProjects() || Auth::user()->isStudent() )
                <p href="#" class="list-group-item btn btn-green">My Projects </p>
              @endif

              @if(Auth::user()->canCreateProjects())
                <a href="/projects/createdProjects" class="list-group-item @if( $page == "projects/createdProjects") {{'active'}} @endif ">Created Projects </a>
              @endif

              @if(Auth::user()->isStudent())
                <a href="/projects/joinedProjects" class="list-group-item @if( $page == "projects/joinedProjects") {{'active'}} @endif">Joined Projects </a>
              @endif

              @if(Auth::user()->isStudent())
                  <a href="/projects/recommendedProjects" class="list-group-item @if( $page == "projects/recommendedProjects") {{'active'}} @endif">Recommended Projects </a>
               @endif

              @if(Auth::user()->canCreateProjects())
                <a href="/projects/addProject"  class="list-group-item @if( $page == "projects/addProject") {{'active'}} @endif">Add Project </a>
              @endif
          </div>

            <br>

            <div class="list-group">
                <p  class="list-group-item btn btn-green">Popular Skills</p>
                        @foreach($skills as $skill)
                            <a href="{{URL::to('projects/skillSearch/'. $skill->name)}}"  class="list-group-item lead">{{$skill->name}}</a>
                        @endforeach

            </div>




</div>


