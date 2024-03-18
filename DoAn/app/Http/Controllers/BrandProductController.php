<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class BrandProductController extends Controller
{
    public function AuthLogin() {
        $admin_id = Session::get('id_admin');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function tatca_dongxe() {
        $this->AuthLogin();
        $tatca_dongxe = DB::table('dong_xe')->get();
        $quanly_dongxe = view('admin.tatca_dongxe')->with('tatca_dongxe', $tatca_dongxe);
        return view('admin.admin_layout')->with('admin.tatca_dongxe', $quanly_dongxe);
    }

    public function them_dongxe() {
        $this->AuthLogin();
        return view('admin.them_dongxe');
    }

    public function luu_dongxe(Request $request) {
        $this->AuthLogin();
        $data = array();
        $data['ten_dongxe'] = $request->ten_dongxe;
        $data['mota_dongxe'] = $request->mota_dongxe;
        $data['trangthai_dongxe'] = $request->trangthai_dongxe;

        DB::table('dong_xe')->insert($data);
        return Redirect::to('tatca-dongxe');
    }

    public function hienthi_dongxe($id_dongxe) {
        $this->AuthLogin();
        DB::table('dong_xe')->where('id_dongxe',$id_dongxe)->update(['trangthai_dongxe'=>0]);
        return Redirect::to('tatca-dongxe');
    }

    public function an_dongxe($id_dongxe) {
        $this->AuthLogin();
        DB::table('dong_xe')->where('id_dongxe',$id_dongxe)->update(['trangthai_dongxe'=>1]);
        return Redirect::to('tatca-dongxe');
    }

    public function chinhsua_dongxe($id_dongxe) {
        $this->AuthLogin();
        $chinhsua_dongxe = DB::table('dong_xe')->where('id_dongxe',$id_dongxe)->get();
        $quanly_dongxe = view('admin.chinhsua_dongxe')->with('chinhsua_dongxe', $chinhsua_dongxe);
        return view('admin.admin_layout')->with('admin.chinhsua_dongxe', $quanly_dongxe);
    }

    public function capnhat_dongxe(Request $request, $id_dongxe) {
        $this->AuthLogin();
        $data = array();
        $data['ten_dongxe'] = $request->ten_dongxe;
        $data['mota_dongxe'] = $request->mota_dongxe;

        DB::table('dong_xe')->where('id_dongxe',$id_dongxe)->update($data);
        return Redirect::to('tatca-dongxe');
    }

    public function xoa_dongxe($id_dongxe) {
        $this->AuthLogin();
        DB::table('dong_xe')->where('id_dongxe',$id_dongxe)->delete();
        return Redirect::to('tatca-dongxe');
    }

    public function hienthi_xe_cungdong($id_dongxe) {
        $loaixe = DB::table('loai_xe')->where('trangthai_loaixe','1')->orderby('id_loaixe','asc')->get();
        $dongxe = DB::table('dong_xe')->where('trangthai_dongxe','1')->orderby('id_dongxe','asc')->get();
        $xe_cung_dong = DB::table('xe')->join('dong_xe','xe.id_dongxe','=','dong_xe.id_dongxe')
            -> where('xe.id_dongxe',$id_dongxe)->get();
        $ten_dongxe = DB::table('dong_xe')->where('dong_xe.id_dongxe',$id_dongxe)->limit(1)->get();
        return view('pages.show_all_brand')->with('loaixe',$loaixe)->with('dongxe',$dongxe)->
        with('xe_cung_dong',$xe_cung_dong)->with('ten_dongxe',$ten_dongxe);
    }
}
