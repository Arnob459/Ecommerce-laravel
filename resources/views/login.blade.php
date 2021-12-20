<h1>Login page</h1>
@include("navbar")


<form action="signin" method="POST">
    @csrf

    <table border="1">
        <tr>
            <td><label for="email">E-mail : </label><br></td>
            <td><input placeholder="example@gmail.com" type="email" name="email" id="email"><br>

            </td>
        </tr>
        <tr>
            <td><label for="password">Password : </label><br></td>
            <td><input type="password" name="password" id="password"><br>
                <span style="color:red">

            </td>
        </tr>
        <tr>

            <td><input type="submit" name="submit_bt" value="login" id="submit_bt"></td>
            <td><a href="signup"> Don't have any account? Create one </a></td>
        </tr>


    </table>

</form>
