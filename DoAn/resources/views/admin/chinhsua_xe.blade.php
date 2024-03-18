@extends('admin.admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach($chinhsua_xe as $key => $xe)
                        <form role="form" action="{{URL::to('/capnhat-xe/'.$xe->id_xe)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Loại xe</label>
                                <select name="id_loaixe" class="form-control input-sm m-bot15">
                                    @foreach($loaixe as $key => $loai)
                                        @if($loai->id_loaixe == $xe->id_loaixe)
                                            <option selected value="{{$loai->id_loaixe}}">{{$loai->ten_loaixe}}</option>
                                        @else
                                            <option value="{{$loai->id_loaixe}}">{{$loai->ten_loaixe}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Dòng xe</label>
                                <select name="id_dongxe" class="form-control input-sm m-bot15">
                                    @foreach($dongxe as $key => $dong)
                                        @if($dong->id_dongxe == $xe->id_dongxe)
                                            <option selected value="{{$dong->id_dongxe}}">{{$dong->ten_dongxe}}</option>
                                        @else
                                            <option value="{{$dong->id_dongxe}}">{{$dong->ten_dongxe}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="ten_xe" class="form-control" id="exampleInputEmail1"
                                value="{{$xe->ten_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="mota_xe" id="exampleInputPassword1">{{$xe->mota_xe}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá thành</label>
                                <input type="text" name="gia_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->gia_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Khối lượng xe</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="khoiluong_xe" id="exampleInputPassword1">{{$xe->khoiluong_xe}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Dài x Rộng x Cao</label>
                                <input type="text" name="bachieu_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->bachieu_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Dung tích bình xăng</label>
                                <input type="text" name="xang_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->xang_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Động cơ</label>
                                <input type="text" name="dongco_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->dongco_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Công suất cực đại</label>
                                <input type="text" name="congsuat_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->congsuat_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Lượng tiêu thụ nhiên liệu</label>
                                <input type="text" name="tieuthunhienlieu_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->tieuthunhienlieu_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Hộp số</label>
                                <input type="text" name="hopso_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->hopso_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Hệ thống khởi động</label>
                                <input type="text" name="khoidong_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->khoidong_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Xy-lanh</label>
                                <input type="text" name="xylanh_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->xylanh_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Phuộc trước</label>
                                <input type="text" name="phuoctruoc_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->phuoctruoc_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Phuộc sau</label>
                                <input type="text" name="phuocsau_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->phuocsau_xe}}">
                            </div>
                            <div class="form-group">
                                <label>Moment lực</label>
                                <input type="text" name="moment_xe" class="form-control" id="exampleInputEmail1" value="{{$xe->moment_xe}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                <input type="file" name="anh_xe" class="form-control" id="exampleInputEmail1">
                                <img src="{{URL::to('../../upload/product/'.$xe->anh_xe)}}" height="100" width="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="trangthai_xe" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>

                            <button type="submit" name="them_xe" class="btn btn-info">Cập nhật sản phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
