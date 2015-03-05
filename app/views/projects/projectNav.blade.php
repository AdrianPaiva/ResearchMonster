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
                <a href="#" class="list-group-item">Created Projects </a>
              @endif

              @if(Auth::user()->canJoinProjects())
                <a href="#" class="list-group-item">Joined Projects </a>
              @endif

              @if(Auth::user()->isStudent() || Auth::user()->isAdmin())
                <a href="#" class="list-group-item">Recommended Projects </a>
              @endif

              @if(Auth::user()->canCreateProjects())
                <a href="/projects/addProject"  class="list-group-item @if( $page == "projects/addProject") {{'active'}} @endif">Add Project </a>
              @endif
          </div>

</div>


