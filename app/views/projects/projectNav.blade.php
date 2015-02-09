<div class='col-xs-4 col-sm-3 col-md-2'>

    <?php
            $page = Route::current()->getUri();
        ?>

           <div class='list-group'>
             <p  class="list-group-item btn btn-yellow ">Projects</p>
             <a href="/projects"  class="list-group-item @if( $page == "projects") {{'active'}} @endif">All Projects</a>
             <a href="#" class="list-group-item">New Projects</a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item" >Skill Search</a>
           <br>
              <p href="#" class="list-group-item btn btn-yellow">My Projects </p>
              <a href="#" class="list-group-item">All My Projects </a>
              <a href="#" class="list-group-item">Recommended Projects </a>
              <a href="/projects/addProject" class="list-group-item @if( $page == "projects/addProject") {{'active'}} @endif">Add Project </a>

          </div>
</div>