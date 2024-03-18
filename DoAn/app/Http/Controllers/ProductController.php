<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{
    //
    public function AuthLogin()
    {
        $admin_id = Session::get('id_admin');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function them_xe()
    {
        $this->AuthLogin();
        $loaixe = DB::table('loai_xe')->orderby('id_loaixe', 'desc')->get();
        $dongxe = DB::table('dong_xe')->orderby('id_dongxe', 'desc')->get();

        return view('admin.them_xe')->with('loaixe', $loaixe)->with('dongxe', $dongxe);

    }

    public function tatca_xe()
    {
        $this->AuthLogin();
        $tatca_xe = DB::table('xe')
            ->join('loai_xe', 'loai_xe.id_loaixe', '=', 'xe.id_loaixe')
            ->join('dong_xe', 'dong_xe.id_dongxe', '=', 'xe.id_dongxe')->get();
        $quanly_xe = view('admin.tatca_xe')->with('tatca_xe', $tatca_xe);
        return view('admin.admin_layout')->with('admin.tatca_xe', $quanly_xe);
    }

    public function luu_xe(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['id_xe'] = $request->id_xe;
        $data['id_loaixe'] = $request->id_loaixe;
        $data['id_dongxe'] = $request->id_dongxe;
        $data['ten_xe'] = $request->ten_xe;
        $data['mota_xe'] = $request->mota_xe;
        $data['gia_xe'] = $request->gia_xe;
        $data['trangthai_xe'] = $request->trangthai_xe;
        $data['khoiluong_xe'] = $request->khoiluong_xe;
        $data['bachieu_xe'] = $request->bachieu_xe;
        $data['xang_xe'] = $request->xang_xe;
        $data['dongco_xe'] = $request->dongco_xe;
        $data['congsuat_xe'] = $request->congsuat_xe;
        $data['tieuthunhienlieu_xe'] = $request->tieuthunhienlieu_xe;
        $data['hopso_xe'] = $request->hopso_xe;
        $data['khoidong_xe'] = $request->khoidong_xe;
        $data['xylanh_xe'] = $request->xylanh_xe;
        $data['phuoctruoc_xe'] = $request->phuoctruoc_xe;
        $data['phuocsau_xe'] = $request->phuocsau_xe;
        $data['moment_xe'] = $request->moment_xe;

        $get_image = $request->file('anh_xe');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('C:\xampp\htdocs\DoAn\public\upload\product', $new_image);
            $data['anh_xe'] = $new_image;
            DB::table('xe')->insert($data);
            return Redirect::to('/tatca-xe');
        }
        $data['anh_xe'] = '';
        DB::table('xe')->insert($data);
        return Redirect::to('tatca-xe');
    }

    public function hienthi_xe($id_xe)
    {
        $this->AuthLogin();
        DB::table('xe')->where('id_xe', $id_xe)->update(['trangthai_xe' => 0]);
        return Redirect::to('tatca-xe');
    }

    public function an_xe($id_xe)
    {
        $this->AuthLogin();
        DB::table('xe')->where('id_xe', $id_xe)->update(['trangthai_xe' => 1]);
        return Redirect::to('tatca-xe');
    }

    public function chinhsua_xe($id_xe)
    {
        $this->AuthLogin();
        $loaixe = DB::table('loai_xe')->orderby('id_loaixe', 'desc')->get();
        $dongxe = DB::table('dong_xe')->orderby('id_dongxe', 'desc')->get();

        $chinhsua_xe = DB::table('xe')->where('id_xe', $id_xe)->get();
        $quanly_xe = view('admin.chinhsua_xe')->with('chinhsua_xe', $chinhsua_xe)->with('loaixe', $loaixe)
            ->with('dongxe', $dongxe);
        return view('admin.admin_layout')->with('admin.chinhsua_xe', $quanly_xe);
    }

    public function capnhat_xe(Request $request, $id_xe)
    {
        $this->AuthLogin();
        $data = array();
        $data['id_loaixe'] = $request->id_loaixe;
        $data['id_dongxe'] = $request->id_dongxe;
        $data['ten_xe'] = $request->ten_xe;
        $data['mota_xe'] = $request->mota_xe;
        $data['gia_xe'] = $request->gia_xe;
        $data['trangthai_xe'] = $request->trangthai_xe;
        $data['khoiluong_xe'] = $request->khoiluong_xe;
        $data['bachieu_xe'] = $request->bachieu_xe;
        $data['xang_xe'] = $request->xang_xe;
        $data['dongco_xe'] = $request->dongco_xe;
        $data['congsuat_xe'] = $request->congsuat_xe;
        $data['tieuthunhienlieu_xe'] = $request->tieuthunhienlieu_xe;
        $data['hopso_xe'] = $request->hopso_xe;
        $data['khoidong_xe'] = $request->khoidong_xe;
        $data['xylanh_xe'] = $request->xylanh_xe;
        $data['phuoctruoc_xe'] = $request->phuoctruoc_xe;
        $data['phuocsau_xe'] = $request->phuocsau_xe;
        $data['moment_xe'] = $request->moment_xe;
/*802445299281*/
        $get_image = $request->file('anh_xe');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('C:\xampp\htdocs\DoAn\public\upload\product', $new_image);
            $data['anh_xe'] = $new_image;
            DB::table('xe')->where('id_xe', $id_xe)->update($data);
            return Redirect::to('/tatca-xe');
        }
        DB::table('xe')->where('id_xe', $id_xe)->update($data);
        return Redirect::to('tatca-xe');
    }

    public function xoa_xe($id_xe)
    {
        $this->AuthLogin();
        DB::table('xe')->where('id_xe', $id_xe)->delete();
        return Redirect::to('tatca-xe');
    }

    public function chitiet_xe($id_xe)
    {
        $loaixe = DB::table('loai_xe')->where('trangthai_loaixe', '1')->orderby('id_loaixe', 'asc')->get();
        $dongxe = DB::table('dong_xe')->where('trangthai_dongxe', '1')->orderby('id_dongxe', 'asc')->get();
        $chitiet_xe = DB::table('xe')
            ->join('loai_xe', 'loai_xe.id_loaixe', '=', 'xe.id_loaixe')
            ->join('dong_xe', 'dong_xe.id_dongxe', '=', 'xe.id_dongxe')
            ->where('xe.id_xe', $id_xe)->get();

        foreach ($chitiet_xe as $key => $chitiet) {
            $id_dongxe = $chitiet->id_dongxe;
        }


        $lienquan_xe = DB::table('xe')
            ->join('loai_xe', 'loai_xe.id_loaixe', '=', 'xe.id_loaixe')
            ->join('dong_xe', 'dong_xe.id_dongxe', '=', 'xe.id_dongxe')
            ->where('dong_xe.id_dongxe', $id_dongxe)->whereNotIn('xe.id_xe',[$id_xe])->get();

        return view('pages.chitiet_xe')->with('loaixe', $loaixe)->with('dongxe', $dongxe)
            ->with('chitiet_xe', $chitiet_xe)->with('lienquan_xe', $lienquan_xe);


    }


}
