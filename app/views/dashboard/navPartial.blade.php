<div class='col-md-2'>

    <?php
        $page = Route::current()->getUri();
    ?>


           <div class='list-group'>
             <p  class="list-group-item btn btn-green ">Dashboard</p>
             <a href="notifications" class="list-group-item @if( $page == "dashboard/notifications") {{'active'}} @endif">Notifications</a>
             <a href="profile" class="list-group-item @if( $page == "dashboard/profile") {{'active'}} @endif" >My Profile </a>
             <a href="editProfile" class="list-group-item @if( $page == "dashboard/editProfile") {{'active'}} @endif">Edit Profile </a>

           </div>
           <br>

</div>