<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class adminController extends Controller
{
    //
    function addAdmin(Request $req)
    {
        $admin = new Admin;

        $req->validate([
            'name' => '',
            'phone_number' => '',
            'email' => '',
            'address' => '',
            'dob' => '',
            'password' => '',

        ]);

        $admin->name = $req->name;
        $admin->phone_number = $req->phone_number;
        $admin->email = $req->email;
        $admin->address = $req->address;
        $admin->dob = $req->dob;
        $admin->password = $req->password;
        $admin->save();

        $data = $req->name;
        $req->session()->flash('note',$data);
        return redirect ('login_admin');
    }

    function adminSignin(Request $req)
    {
        $req->validate([
            'email' => '',
            'password' => ''

        ]);

        $check = Admin::where([
            ['email','=',$req->email],
            ['password','=',$req->password]
        ])->first();

        if ($check)
        {
            $req->session()->put( 'admin_user', $check->name);
            //$req->session()->put( 'email', $check->email);

            return redirect('adminDashboard');

        }
        else
        {
            $data = "Your email or password is incorrect";
            $req->session()->flash('note',$data);
            return redirect ('login_admin');

        }



    }


}
