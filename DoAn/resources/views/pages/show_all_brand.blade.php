@extends('welcome')
@section('content')

<div class="product-container">
	<div class="wp-product">
		<div class="category-motorbike" style="background: #ffefe0">
			@foreach ($ten_dongxe as $key => $ten)
			<p id="category-name">{{$ten->ten_dongxe}}</p>
			@endforeach
		</div>
		<div class="all-category-product">
			<div class="row" style="margin-left: 50px;">
				@foreach($xe_cung_dong as $key => $xe)
				<div class="product-slide-tab col-md-3 col-sm-6">
					<div class="product-slide-tab-top">
						<div class="img-product">
							<div class="image-motor-product">
								<a href="{{URL::to('product/'.$xe->id_xe)}}">
									<img src="../../upload/product/{{ $xe->anh_xe }}" style="width: 250px; height: 200px;">
								</a>
							</div>
						</div>
					</div>

					<input type="hidden" name="quantity" min="1" value="1"/>
                    <input type="hidden" name="product_id_hidden" value="{{$xe->id_xe}}"/>
					<div class="name-price-motor">
						<a href="{{URL::to('product/'.$xe->id_xe)}}" class="product-link" style="text-decoration: none">
							<p class="product-name" style="color: black; font-weight: bold">{{$xe->ten_xe}}</p>
						</a>
						<p class="product-tab-price">{{number_format($xe->gia_xe).' '.'VND'}}</p>
					</div>

					<a href="/" target="_blank">
						<div class="product-slide-tab-detail">
							<a href="{{URL::to('product/'.$xe->id_xe)}}" style="text-decoration: none">
								<p style="color: white;">Xem chi tiết</p>
							</a>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection