<div class='col-xs-2'>

           <div class='list-group'>
           <p  class="list-group-item btn btn-green ">Users</p>
             <a href="users" class="list-group-item active">All Users </a>
             <a href="#" class="list-group-item">Sort Option </a>
             <a href="#" class="list-group-item">Sort Option </a>
           </div>
           <br>

         @if(Auth::user()->isAdmin())
           <div class='list-group'>
           <p  class="list-group-item btn btn-green ">Manage Users</p>
             <a href="users" class="list-group-item active">All Users </a>
             <a href="#" class="list-group-item">Research Office Staff</a>
             <a href="#" class="list-group-item">Standard Users</a>
           </div>
           <br>
         @endif
</div>