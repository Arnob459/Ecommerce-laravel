<h1>Member profile</h1>
@include("navbar")

@if(session('user'))
    <h3 style="color:rgb(34, 192, 34)"> welcome {{ session('user') }}</h3>
@endif
<a href="logout">logout</a>
