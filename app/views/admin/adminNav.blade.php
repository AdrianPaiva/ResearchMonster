<div class='col-xs-2 col-sm-2 col-md-2'>

    <?php
            $page = Route::current()->getUri();

        ?>

                     <div class='list-group'>
                     <p  class="list-group-item btn btn-green ">Manage Users</p>
                       <a href="{{URL::to('/admin')}}" class="list-group-item @if( $page == "admin") {{'active'}} @endif">All Users </a>
                       <a href="{{URL::to('/admin/admins')}}" class="list-group-item @if( $page == "admin/admins") {{'active'}} @endif ">Admins</a>
                       <a href="{{URL::to('/admin/researchers')}}" class="list-group-item @if( $page == "admin/researchers") {{'active'}} @endif ">Research Office Staff</a>
                       <a href="{{URL::to('/admin/professors')}}" class="list-group-item @if( $page == "admin/professors") {{'active'}} @endif ">Professors</a>
                       <a href="{{URL::to('/admin/students')}}" class="list-group-item @if( $page == "admin/students") {{'active'}} @endif ">Students</a>

                     </div>
                     <br>


</div>


