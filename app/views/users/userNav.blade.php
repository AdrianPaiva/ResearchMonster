<div class='col-xs-2'>

    <?php
            $page = Route::current()->getUri();

    ?>
           <div class='list-group'>
           <p  class="list-group-item btn btn-green ">Users</p>
             <a href="users" class="list-group-item @if( $page == "users") {{'active'}} @endif">All Users </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
           </div>
           <br>

</div>