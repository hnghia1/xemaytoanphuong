@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục hãng xe
                </header>

                <div class="panel-body">
                    @foreach($chinhsua_dongxe as $key => $chinhsua)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/capnhat-dongxe/'.$chinhsua->id_dongxe)}}" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên dòng xe</label>
                            <input type="text" value="{{$chinhsua->ten_dongxe}}" class="form-control" name="ten_dongxe">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea style="resize: none;" rows="8" class="form-control" name="mota_dongxe">{{$chinhsua->mota_dongxe}}</textarea>
                        </div>
                        <button type="submit" name="them_dongxe" class="btn btn-info">Cập nhật danh mục</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>

@endsection