@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục loại xe
                </header>

                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/luu-loaixe')}}" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên loại xe</label>
                            <input type="text" class="form-control" name="ten_loaixe" placeholder="Nhập tên loại xe">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea style="resize: none;" rows="8" class="form-control" name="mota_loaixe"> </textarea>
                        </div>
                        <div class="form-group">
                            <label">Hiển thị</label>
                            <select name="trangthai_loaixe" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="them_loaixe" class="btn btn-info">Thêm danh mục</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection