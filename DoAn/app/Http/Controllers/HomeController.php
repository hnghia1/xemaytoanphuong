<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    public function index() {
        $loaixe = DB::table('loai_xe')->where('trangthai_loaixe','1')->orderby('id_loaixe','asc')->get();
        $dongxe = DB::table('dong_xe')->where('trangthai_dongxe','1')->orderby('id_dongxe','asc')->get();
//        $all_pro = DB::table('tbl_product')
//            ->join('tbl_category_product','tbl_category_product.cate_id','=','tbl_product.cate_id')
//            ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')->get();
        $tatca_xe = DB::table('xe')->where('trangthai_xe','1')->orderby('id_xe','asc')->limit(12)->get();
        return view('pages.home')->with('loaixe',$loaixe)->with('dongxe',$dongxe)->with('tatca_xe',$tatca_xe);
    }
}
