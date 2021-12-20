<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class memberController extends Controller
{
    //
    function addMember(Request $req)
    {
        $member = new Member;

        $req->validate([
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'password' => '',
            'address' => '',
            'phone_number' => '',
            'dob' => '',
            'gender' => '',
            

        ]);

        $member->first_name = $req->first_name;
        $member->last_name = $req->last_name;
        $member->email = $req->email;
        $member->password = $req->password;
        $member->address = $req->address;
        $member->phone_number = $req->phone_number;
        $member->dob = $req->dob;
        $member->gender = $req->gender;
        $member->save();

        return response()->json([
            'status' => 200,
            'member' => $member,
        ]);



    }
    function showMember()
    {
    //     $data = Member::all();
    //     return view('membersList',['membersCollection'=>$data]);
    return Member::all();
 }

    function showMembers($mid)
    {
        // $data = Member::find($id);
        // return view('membersDetail',['membersInfo'=>$data]);
        $data = Member::find($mid);
        return $data;
    }

    function membersUpdate(Request $req,$mid)
    {
        $member = Member::find($mid);

        $req->validate([
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'password' => '',
            'address' => '',
            'phone_number' => '',
            'dob' => '',
            'gender' => '',

        ]);

        
        $member->first_name = $req->input('first_name');
        $member->last_name = $req->input('last_name');
        $member->email = $req->input('email');
        $member->password = $req->input('password');
        $member->address = $req->input('address');
        $member->phone_number = $req->input('phone_number');
        $member->dob = $req->input('dob');
        $member->gender = $req->input('gender');
        $member->save();
        return $member;
   

        
    }

    function delete($mid)
    {
        $data = Member::where('id',$mid)->delete();
        if($data)
        {
            return ["result"=>"Member has been delete"];
        }
        else
        {
            return ["result"=>"Operation failed"];
        }
       
    }


    function memberSignin(Request $req)
    {
        $req->validate([
            'email' => '',
            'password' => ''

        ]);

        $check = Member::where([
            ['email','=',$req->email],
            ['password','=',$req->password]
        ])->first();

        if ($check)
        {
            return response()->json([
                'status' => 200,
                'check' => $check
            ]);


        }
        else
        {
            return response()->json([
                'status' => 404,
                'error' => "Your email or password is incorrect",
                'hhh' => "ndsuachfcu"
            ]);


        }



    }
}
