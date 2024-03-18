@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục loại xe
                </header>

                <div class="panel-body">
                    @foreach($chinhsua_loaixe as $key => $chinhsua)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/capnhat-loaixe/'.$chinhsua->id_loaixe)}}" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên dòng xe</label>
                            <input type="text" value="{{$chinhsua->ten_loaixe}}" class="form-control" name="ten_loaixe">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea style="resize: none;" rows="8" class="form-control" name="mota_loaixe">{{$chinhsua->mota_loaixe}}</textarea>
                        </div>
                        <button type="submit" name="them_loaixe" class="btn btn-info">Cập nhật danh mục</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>

@endsection