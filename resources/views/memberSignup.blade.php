<h1>New account Registration </h1>

@include("navbar")

<form action="add_member" method="POST">
    @csrf

    <table border="1">
        <tr>
            <td><label for="first_name">First name : </label><br></td>
            <td><input  type="text" name="first_name" id="first_name"><br>

            </td>
        </tr>
        <tr>
            <td><label for="last_name">Last name : </label><br></td>
            <td><input type="text" name="last_name" id="last_name"><br>

            </td>
        </tr>
        <tr>
            <td><label for="email">Email : </label><br></td>
            <td><input  type="email" name="email" id="email"><br>

            </td>
        </tr>
        <tr>
            <td><label for="password">Password : </label><br></td>
            <td><input type="password" name="password" id="password"><br>

            </td>
        </tr>

        <tr>

            <td><input type="submit" name="submit_bt" value="confirm" id="submit_bt"></td>
            <td><a href="login"> Already have an account? Login</a></td>
        </tr>


    </table>

</form>
