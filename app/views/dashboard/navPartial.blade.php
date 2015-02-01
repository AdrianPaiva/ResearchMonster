<div class='col-md-2'>

    <?php
        $page = Route::current()->getUri();
    ?>


           <div class='list-group'>
             <a style="color:white" class="list-group-item btn-warning disabled">Dashboard </a>
             <a href="notifications" class="list-group-item @if( $page == "dashboard/notifications") {{'active'}} @endif">Notifications</a>
             <a href="profile" class="list-group-item @if( $page == "dashboard/profile") {{'active'}} @endif" >Profile </a>
             <a href="editProfile" class="list-group-item @if( $page == "dashboard/editProfile") {{'active'}} @endif">Edit Profile </a>
             <a href="addProject" class="list-group-item @if( $page == "dashboard/addProject") {{'active'}} @endif">Add Project </a>
           </div>
           <br>

</div>