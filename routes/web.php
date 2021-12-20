<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\adminController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('add','add');
Route::post('add',[ProductController::class,"addData"]);
Route::post('add_member',[memberController::class,"addMember"]);
Route::post('add_admin',[adminController::class,"addAdmin"]);
Route::post('signin',[memberController::class,"memberSignin"]);
//admin
Route::post('signin_admin',[adminController::class,"adminSignin"]);
Route::get('product',[ProductController::class,"showData"]);
Route::get('detail/{id}',[ProductController::class,"showProduct"]);
Route::get('edit/{id}',[ProductController::class,"showEdit"]);
Route::put('update',[ProductController::class,"updateProduct"])->name('update');
Route::get('delete/{id}',[ProductController::class,"delete"]);
Route::get('membersList',[memberController::class,"showMember"]);
Route::get('membersDetail/{mid}',[memberController::class,"showMembers"]);
 ///////////////////////////////////////////////////session middleware for every condition start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::group(['middleware'=>['ProtectPage']],function(){
    Route::view('signup_admin','adminSignup');
    Route::view('signup','memberSignup');
    Route::view('login_admin','adminLogin');
    Route::view('login','login');

    Route::get('adminDashboard',function(){
        if(session()->has('admin_user'))
        {
            return view('adminDashboard');
        }
        return redirect('login_admin');
    });

    Route::get('memberDashboard',function(){
        if(session()->has('user'))
        {
            return view('memberDashboard');
        }
        return redirect('login');

    });

});
//////////////////////////////////////////////////////////session middleware for every condition end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

///////////////logout for members/////////////////////////////
Route::get('logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login');
});
/////////////////////////////logout for admin///////////////////////////
Route::get('logout_admin',function(){
    if(session()->has('admin_user'))
    {
        session()->pull('admin_user',null);
    }
    return redirect('login_admin');
});





