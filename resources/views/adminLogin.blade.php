<h1>Admin Login page</h1>
@include("navbar")

@if(session('note'))
    <h3 style="color:rgb(34, 192, 34)"> {{ session('note') }} </h3>
@endif


<form action="signin_admin" method="POST">
    @csrf
    <table border="1">
        <tr>
            <td><label for="email">E-mail : </label><br></td>
            <td><input placeholder="example@gmail.com" type="email" name="email" id="email"><br>
                <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password : </label><br></td>
            <td><input type="password" name="password" id="password"><br>
                <span style="color:red">
                @error('password')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>

            <td><input type="submit" name="submit_bt" value="login" id="submit_bt"></td>
            <td><a href="signup_admin">SIGNUP admin</a></td>
        </tr>


    </table>

</form>
