<div class='col-xs-2 col-sm-2 col-md-2'>

    <?php
            $page = Route::current()->getUri();

        ?>

           <div class='list-group'>
             <p  class="list-group-item btn btn-green">Projects</p>
             <a href="/projects"  class="list-group-item @if( $page == "projects") {{'active'}} @endif">All Projects</a>
             <a href="#" class="list-group-item">New Projects</a>
             <a href="/projects/skillSearch" class="list-group-item @if( $page == "projects/skillSearch") {{'active'}} @endif" >Skill Search</a>
           <br>
              <p href="#" class="list-group-item btn btn-green">My Projects </p>

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

</div>


