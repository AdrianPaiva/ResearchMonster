<div class='col-md-2'>

    <?php
            $page = Route::current()->getUri();
        ?>

           <div class='list-group'>
             <a href="#" style="color:white" class="list-group-item btn-warning disabled">Projects </a>
             <a href="/projects" class="list-group-item @if( $page == "projects") {{'active'}} @endif">All Projects</a>
             <a href="#" class="list-group-item">Recently Added </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
           <br>
              <a href="#" style="color:white" class="list-group-item btn-warning disabled">My Projects </a>
              <a href="#" class="list-group-item">All My Projects </a>
              <a href="#" class="list-group-item">Recent Projects </a>
              <a href="#" class="list-group-item">Recommended Projects </a>

          </div>
</div>