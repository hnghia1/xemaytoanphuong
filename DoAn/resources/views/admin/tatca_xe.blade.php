@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Sản phẩm
            </div>

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên xe</th>
                        <th>Loại xe</th>
                        <th>Dòng xe</th>
                        <th>Mô tả</th>
                        <th>Giá thành</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Hiển thị</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tatca_xe as $key => $xe)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $xe->ten_xe }}</td>
                            <td>{{ $xe->ten_loaixe }}</td>
                            <td>{{ $xe->ten_dongxe }}</td>
                            <td><span class="text-ellipsis">{{ $xe->mota_xe }}</span></td>
                            <td>{{number_format($xe->gia_xe).' VND'}}</td>
                            <td><img src="../../upload/product/{{ $xe->anh_xe }}" height="100" width="100"></td>
                            <td><span class="text-ellipsis">
                                <?php
                                    if ($xe->trangthai_xe == 0) {
                                        ?>
                                    <a href="{{URL::to('/an-xe/'.$xe->id_xe)}}"><span class="fa fa-check-circle-o"></span></a>
                                <?php
                                    }else{
                                        ?>
                                    <a href="{{URL::to('/hienthi-xe/'.$xe->id_xe)}}"><span class="fa fa-check-circle"></span></a>
                                <?php
                                    }
                                        ?>
                            </span></td>
                            <td>
                                <a href="{{URL::to('/chinhsua-xe/'.$xe->id_xe)}}" class="active" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ?')" href="{{URL::to('/xoa-xe/'.$xe->id_xe)}}" class="active" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
