<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin_login');
    }

    public function show_dashboard() {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $email_admin = $request->email_admin;
        $password_admin = $request->password_admin;
        $result = DB::table('admin')->where('email_admin',$email_admin)->where('password_admin',$password_admin)->first();
        
        if ($result) {
            Session::put('hoten_admin', $result->hoten_admin);
            Session::put('id_admin', $result->id_admin);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message','Sai thông tin đăng nhập');
            return Redirect::to('/admin');
        }
    }

    public function logout() {
        return Redirect::to('/admin');
    }
}
