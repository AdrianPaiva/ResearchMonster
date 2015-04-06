<div class='col-xs-2'>

    <?php
            $page = Route::current()->getUri();

    ?>
           <div class='list-group'>
           <p  class="list-group-item btn btn-green ">Users</p>
             <a href="/users" class="list-group-item @if( $page == "users") {{'active'}} @endif">All Students </a>
             <a href="/users/programSearch" class="list-group-item @if( $page == "users/programSearch") {{'active'}} @endif">Programs</a>

           </div>
           <br>

</div>