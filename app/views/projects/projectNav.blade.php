<div class='col-md-2'>

    <?php
            $page = Route::current()->getUri();
        ?>

           <div class='list-group'>
             <p  class="list-group-item btn btn-yellow ">Projects</p>
             <a href="projects" class="list-group-item @if( $page == "projects") {{'active'}} @endif">All Projects</a>
             <a href="#" class="list-group-item">Recently Added </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
           <br>
              <p href="#" class="list-group-item btn btn-yellow">My Projects </p>
              <a href="#" class="list-group-item">All My Projects </a>
              <a href="#" class="list-group-item">Recent Projects </a>
              <a href="#" class="list-group-item">Recommended Projects </a>

          </div>
</div>