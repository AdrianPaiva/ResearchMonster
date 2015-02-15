<div class='col-xs-4 col-sm-3 col-md-2'>

    <?php
            $page = Route::current()->getUri();

        ?>

                     <div class='list-group'>
                     <p  class="list-group-item btn btn-green ">Manage Users</p>
                       <a href="{{URL::to('/admin')}}" class="list-group-item @if( $page == "admin") {{'active'}} @endif">All Users </a>
                       <a href="{{URL::to('/admin/admins')}}" class="list-group-item @if( $page == "admin/admins") {{'active'}} @endif ">Admins</a>
                       <a href="{{URL::to('/admin/researchers')}}" class="list-group-item @if( $page == "admin/researchers") {{'active'}} @endif ">Research Office Staff</a>
                       <a href="{{URL::to('/admin/standardUsers')}}" class="list-group-item @if( $page == "admin/standardUsers") {{'active'}} @endif ">Standard Users</a>

                     </div>
                     <br>


</div>


