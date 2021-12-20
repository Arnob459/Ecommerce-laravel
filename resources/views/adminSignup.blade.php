<h1>Admin Register</h1>
@include("navbar")

<form action="add_admin" method="POST">
    @csrf

    <table border="1">
        <tr>
            <td><label for="name">Admin name : </label><br></td>
            <td><input  type="text" name="name" id="name"><br>
                <span style="color:red">
                @error('name')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="email">Email : </label><br></td>
            <td><input  type="email" name="email" id="email"><br>
                <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="phone_number">Phone number : </label><br></td>
            <td><input type="text" name="phone_number" id="phone_number"><br>
                <span style="color:red">
                @error('phone_number')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="address">Address : </label><br></td>
            <td><input type="text" name="address" id="address"><br>
                <span style="color:red">
                @error('address')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="dob">Date of Birth : </label><br></td>
            <td><input type="date" name="dob" id="dob"><br>
                <span style="color:red">
                @error('p_price')
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

            <td><input type="submit" name="submit_bt" value="confirm" id="submit_bt"></td>
            <td><a href="login_admin"> Already have an account? Login</a></td>
        </tr>


    </table>

</form>
