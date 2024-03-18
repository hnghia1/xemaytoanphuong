<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class CategoryProductController extends Controller
{
    public function AuthLogin() {
        $admin_id = Session::get('id_admin');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function tatca_loaixe() {
        $this->AuthLogin();
        $tatca_loaixe = DB::table('loai_xe')->get();
        $quanly_loaixe = view('admin.tatca_loaixe')->with('tatca_loaixe', $tatca_loaixe);
        return view('admin.admin_layout')->with('admin.tatca_loaixe', $quanly_loaixe);
    }

    public function them_loaixe() {
        $this->AuthLogin();
        return view('admin.them_loaixe');
    }

    public function luu_loaixe(Request $request) {
        $this->AuthLogin();
        $data = array();
        $data['ten_loaixe'] = $request->ten_loaixe;
        $data['mota_loaixe'] = $request->mota_loaixe;
        $data['trangthai_loaixe'] = $request->trangthai_loaixe;

        DB::table('loai_xe')->insert($data);
        return Redirect::to('tatca-loaixe');
    }

    public function hienthi_loaixe($id_loaixe) {
        $this->AuthLogin();
        DB::table('loai_xe')->where('id_loaixe',$id_loaixe)->update(['trangthai_loaixe'=>0]);
        return Redirect::to('tatca-loaixe');
    }

    public function an_loaixe($id_loaixe) {
        $this->AuthLogin();
        DB::table('loai_xe')->where('id_loaixe',$id_loaixe)->update(['trangthai_loaixe'=>1]);
        return Redirect::to('tatca-loaixe');
    }

    public function chinhsua_loaixe($id_loaixe) {
        $this->AuthLogin();
        $chinhsua_loaixe = DB::table('loai_xe')->where('id_loaixe',$id_loaixe)->get();
        $quanly_loaixe = view('admin.chinhsua_loaixe')->with('chinhsua_loaixe', $chinhsua_loaixe);
        return view('admin.admin_layout')->with('admin.chinhsua_loaixe', $quanly_loaixe);
    }

    public function capnhat_loaixe(Request $request, $id_loaixe) {
        $this->AuthLogin();
        $data = array();
        $data['ten_loaixe'] = $request->ten_loaixe;
        $data['mota_loaixe'] = $request->mota_loaixe;

        DB::table('loai_xe')->where('id_loaixe',$id_loaixe)->update($data);
        return Redirect::to('tatca-loaixe');
    }

    public function xoa_loaixe($id_loaixe) {
        $this->AuthLogin();
        DB::table('loai_xe')->where('id_loaixe',$id_loaixe)->delete();
        return Redirect::to('tatca-loaixe');
    }

    public function hienthi_xe_cungloai($id_loaixe) {
        $loaixe = DB::table('loai_xe')->where('trangthai_loaixe','1')->orderby('id_loaixe','asc')->get();
        $dongxe = DB::table('dong_xe')->where('trangthai_dongxe','1')->orderby('id_dongxe','asc')->get();
        $xe_cung_loai = DB::table('xe')->join('loai_xe','xe.id_loaixe','=','loai_xe.id_loaixe')
            -> where('xe.id_loaixe',$id_loaixe)->get();
        $ten_loaixe = DB::table('loai_xe')->where('loai_xe.id_loaixe',$id_loaixe)->limit(1)->get();
        return view('pages.show_all_category')->with('loaixe',$loaixe)->with('dongxe',$dongxe)->
        with('xe_cung_loai',$xe_cung_loai)->with('ten_loaixe',$ten_loaixe);
    }
}
