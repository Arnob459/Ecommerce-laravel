<h1>Admin profile</h1>
@include("navbar")
@if(session('admin_user'))
    <h3 style="color:rgb(34, 192, 34)"> welcome {{ session('admin_user') }}</h3>
@endif
<a href="logout_admin">logout</a>
