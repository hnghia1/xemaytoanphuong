@extends('admin.admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/luu-xe')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Loại xe</label>
                                <select name="id_loaixe" class="form-control input-sm m-bot15">
                                    @foreach($loaixe as $key => $loaixe)
                                        <option value="{{$loaixe->id_loaixe}}">{{$loaixe->ten_loaixe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <labele">Dòng xe</label>
                                <select name="id_dongxe" class="form-control input-sm m-bot15">
                                    @foreach($dongxe as $key => $dongxe)
                                        <option value="{{$dongxe->id_dongxe}}">{{$dongxe->ten_dongxe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="ten_xe" class="form-control" placeholder="Tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="mota_xe" placeholder="Mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá thành</label>
                                <input type="text" name="gia_xe" class="form-control" placeholder="Giá thành">
                            </div>
                            <div class="form-group">
                                <label>Khối lượng</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="khoiluong_xe" placeholder="Khối lượng xe"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Dài x Rộng x Cao</label>
                                <input type="text" name="bachieu_xe" class="form-control" placeholder="Dài x Rộng x Cao">
                            </div>
                            <div class="form-group">
                                <label>Dung tích bình xăng</label>
                                <input type="text" name="xang_xe" class="form-control" placeholder="Dung tích bình xăng">
                            </div>
                            <div class="form-group">
                                <label>Động cơ</label>
                                <input type="text" name="dongco_xe" class="form-control" placeholder="Động cơ">
                            </div>
                            <div class="form-group">
                                <label>Công suất cực đại</label>
                                <input type="text" name="congsuat_xe" class="form-control" placeholder="Công suất cực đại">
                            </div>
                            <div class="form-group">
                                <label>Lượng tiêu thụ nhiên liệu</label>
                                <input type="text" name="tieuthunhienlieu_xe" class="form-control" placeholder="Lượng tiêu thụ nhiên liệu">
                            </div>
                            <div class="form-group">
                                <label>Hộp số</label>
                                <input type="text" name="hopso_xe" class="form-control" placeholder="Hộp số">
                            </div>
                            <div class="form-group">
                                <label>Hệ thống khởi động</label>
                                <input type="text" name="khoidong_xe" class="form-control" placeholder="Hệ thống khởi động">
                            </div>
                            <div class="form-group">
                                <label>Xy-lanh</label>
                                <input type="text" name="xylanh_xe" class="form-control" placeholder="Xy-lanh">
                            </div>
                            <div class="form-group">
                                <label>Phuộc trước</label>
                                <input type="text" name="phuoctruoc_xe" class="form-control" placeholder="Phuộc trước">
                            </div>
                            <div class="form-group">
                                <label>Phuộc sau</label>
                                <input type="text" name="phuocsau_xe" class="form-control" placeholder="Phuộc sau">
                            </div>
                            <div class="form-group">
                                <label>Moment lực</label>
                                <input type="text" name="moment_xe" class="form-control" placeholder="Moment lực">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                <input type="file" name="anh_xe" class="form-control" id="exampleInputEmail1" placeholder="Hình ảnh sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <select name="trangthai_xe" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>

                            <button type="submit" name="them_xe" class="btn btn-info">Thêm sản phẩm</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
