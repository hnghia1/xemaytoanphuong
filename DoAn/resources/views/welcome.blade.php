<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="text/css" href="../../frontend/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Xe máy Toàn Phương</title>
</head>
<body>
<header>
    <div class="container-fluid p-5 bg-black text-center">
        <div class="row">
            <div class="col-sm-4">
                <a href="/">
                    <img class="logo" src="../../frontend/img/logo2.png" style="width: 100px;">
                </a>
            </div>

            <div class="col-sm-8">
                <div class="row">
                    <div class="col-md-3">
                        <div class="policy-item">
                            <div class="icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="text">
                                <p class="h6">GIAO HÀNG</p>
                                <p>Vận chuyển toàn quốc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="policy-item">
                            <div class="icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="text">
                                <p class="h6">BẢO HÀNH</p>
                                <p>Yên tâm chất lượng</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="policy-item">
                            <div class="icon">
                                <i class="fa-solid fa-money-bill"></i>
                            </div>
                            <div class="text">
                                <p class="h6">THANH TOÁN</p>
                                <p>Thanh toán linh hoạt</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="cart-item">
                            <div class="icon">
                                <a href="/" class="fa-solid fa-cart-shopping" style="color: white; text-decoration: none;"></a>
                            </div>
                            <div class="text">
                                <a href="/" class="h6" style="color: white; text-decoration: none;">GIỎ HÀNG</a>
                                <p>0 sản phẩm</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="header-bottom">
        <nav>
            <ul class="cf">
                <li><a href="/trang-chu">TRANG CHỦ</a></li>
                <li><a class="dropdown" href="#">GIỚI THIỆU</a>
                    <ul>
                        <li><a href="#">GIỚI THIỆU CHUNG</a></li>
                        <li><a href="#">TẦM NHÌN</a></li>
                        <li><a href="#">HOẠT ĐỘNG XÃ HỘI</a></li>
                        <li><a href="#">CHỨNG NHẬN VÀ GIẢI THƯỞNG</a></li>
                    </ul>
                </li>
                <li><a class="dropdown" href="#">XE MÁY</a>
                    <ul>
                        @foreach($loaixe as $key => $loai)
                            <li><a href="{{URL::to('category-product/'.$loai->id_loaixe)}}">{{$loai->ten_loaixe}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="dropdown" href="#">DÒNG XE</a>
                    <ul>
                        @foreach($dongxe as $key => $dong)
                            <li><a href="{{URL::to('brand-product/'.$dong->id_dongxe)}}">{{$dong->ten_dongxe}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="dropdown" href="#">PHỤ TÙNG</a>
                    <ul>
                        <li><a href="#">PHỤ TÙNG CHÍNH HÃNG</a></li>
                        <li><a href="#">DẦU NHỜN VÀ HÓA CHẤT</a></li>
                    </ul>
                </li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
                <li id="search">
                    <form method="POST" action="" name="search">
                        <input type="text" class="search-text-box" name="search-text-box"
                               placeholder="TÌM KIẾM">
                        <button type="submit" class="btn-search" style="margin-top: -10px;"><i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>

</header>

<content>
    <div class="slider-container">
        <div class="list-images">
            <img src="../../frontend/img/banner1.jpg">
            <img src="../../frontend/img/banner2.png">
        </div>
        <div class="btns">
            <div class="btn-left btn-arrow"><i class="bx bx-chevron-left"></i></div>
            <div class="btn-right btn-arrow"><i class="bx bx-chevron-right"></i></div>
        </div>
    </div>

    <div class="service-container">
        <div class="customer-service">
            <div class="container clearfix">

                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="service-name">
                            <h6>
                                <a href="/" target="_blank">TƯ VẤN CHỌN XE</a>
                            </h6>
                        </div>
                        <div class="service-bottom">
                            <p>Tư vấn chọn xe cho bạn</p>
                            <div class="view-more text-center">
                                <a href="/" target="_blank">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="service-name">
                            <h6>
                                <a href="/" target="_blank">DỊCH VỤ SỬA CHỮA</a>
                            </h6>
                        </div>
                        <div class="service-bottom">
                            <p>Dịch vụ sửa chữa</p>
                            <div class="view-more text-center">
                                <a href="/" target="_blank">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="service-name">
                            <h6>
                                <a href="/" target="_blank">PHỤ TÙNG XE</a>
                            </h6>
                        </div>
                        <div class="service-bottom">
                            <p>Phụ tùng xe</p>
                            <div class="view-more text-center">
                                <a href="/" target="_blank">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="service-name">
                            <h6>
                                <a href="/" target="_blank">TRẢ GÓP SẢN PHẨM</a>
                            </h6>
                        </div>
                        <div class="service-bottom">
                            <p>Trả góp sản phẩm</p>
                            <div class="view-more text-center">
                                <a href="/" target="_blank">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @yield('content')
</content>

<footer>
    <div class="footer-container">
        <div class="about-us">
            <div class="footer-image-container">
                <img src="../../frontend/img/footer_img.jpg">
                <div class="about-us-text">
                    <h6 style="">Liên hệ với chúng tôi</h6>
                    <p>Toanphuong.com</p>
                    <p>Tư vấn miễn phí: 84705799891</p>
                </div>
                <div class="social-icon">
                    <a href="/"><i class="fa-brands fa-facebook" style="color: blue"></i></a>
                    <a href="/"><i class="fa-brands fa-youtube" style="color: red"></i></a>
                    <a href="/"><i class="fa-solid fa-globe" style="color: white"></i></a>
                </div>
            </div>
        </div>

        <div class="bottom-sidebar">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="widget footer-widget">
                            <div class="text-center">
                                <img src="../../frontend/img/logo2.png" style="width: 150px; height: 150px">
                            </div>
                            <div class="address">
                                <h3 class="text-center" style="text-transform: uppercase; font-weight: bold; color: white;">CÔNG TY TNHH TM DỊCH VỤ KỸ THUẬT TOÀN PHƯƠNG</h3>
                                <div class="mrb-10">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Địa chỉ: 1/115 Đường Máng Nước – xã An Đồng – huyện An Dương - Hải Phòng.</p>
                                </div>
                                <div class="mrb-10">
                                    <i class="fa-solid fa-phone"></i>
                                    <p>Số điện thoại: 0989.567.499 / 02253.593.816</p>
                                </div>
                                <div class="mrb-10">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p>Email:tptecserco.ltd@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="widget footer-widget">
                            <h3 class="widget-title text-center" style="text-transform: uppercase; font-weight: bold; color: white; margin-top: 40px;">LIÊN KẾT</h3>
                            <ul class="footer-widget-list" style="margin-top: 20px">
                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">TRANG CHỦ</a>
                                </li>

                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">GIỚI THIỆU</a>
                                </li>

                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">XE MÁY</a>
                                </li>

                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">DÒNG XE</a>
                                </li>

                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">PHỤ TÙNG</a>
                                </li>

                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">TIN TỨC</a>
                                </li>

                                <li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <a href="/">LIÊN HỆ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="widget footer-widget">
                            <h3 class="widget-title text-center" style="text-transform: uppercase; font-weight: bold; color: white; margin-top: 40px;">BẢN ĐỒ</h3>
                            <div class="map-container text-center">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.420296370283!2d106.64390157556667!3d20.855102993719825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a16ab8cc6ab%3A0x441565558c84339c!2zMTE1IE3DoW5nIE7GsOG7m2MsIEFuIMSQw7RuZywgQW4gRMawxqFuZywgSOG6o2kgUGjDsm5nIDE4MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1709826316916!5m2!1svi!2s" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="last-panel text-center" style="background-color: lightgray;">
            <h3>Đồ án thực tập tốt nghiệp</h3>
        </div>
    </div>
</footer>


    <script src="../../frontend/js/slider.js"></script>
</body>
</html>