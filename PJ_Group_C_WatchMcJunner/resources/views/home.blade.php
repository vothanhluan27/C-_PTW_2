<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group c</title>
    <link rel="stylesheet" href="../css/home1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
    </nav>

    <div id="top"></div>
    <div class="wrapper">
        <div id="menu">
            <ul>
                <li><a href="{{ route('home') }}" class="link active">Danh Mục</a></li>
                <li><a href="{{ route('home/watch_boy') }}" class="link">Đồng hồ Nam</a></li>
                <li><a href="watch_girl" class="link">Đồng hồ Nữ</a></li>
                <li><a href="watch_couple" class="link">Đồng hồ Đôi</a></li>
                <li><a href="hot" class="link">Hot</a></li>
                <li><a href="sale" class="link">Sale </a></li>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </ul>
        </div>
        <!------------------- banner-home -------------------------->
        <div id="banner-home">
            <div class="box-left-home">
                <h2>
                    <span>SANG TRỌNG</span><br>
                    <span>LỊCH LÃM</span>
                </h2>
                <p>Xu hướng cổ điển lên ngôi, Năng tầm giá trị phái đẹp</p>
                <button>Xem Ngay</button>
            </div>
            <div class="box-right-home">
                <img src="../img/img1.jpg" alt="">
                <img src="../img/img2.jpg " alt="">
                <img src="../img/img3.jpg" alt="">
            </div>
        </div>
        <!------------------- wp-products -------------------------->

        <div id="wp-products">
            <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
            <div class="container">
                <div id="list-products" class="row">
                    <div class="col-md-3  item">
                        <img src="../img/rolex.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                        <div class="price">460.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/rolex-blu.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                        <div class="price">260.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/rolex-black.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Air-King 116900</div>
                        <div class="price">465.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/img1.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                        <div class="price">460.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/banner_wed.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                        <div class="price">460.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/banner_wed.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                        <div class="price">460.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/banner_wed.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                        <div class="price">460.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>
                    <div class="col-md-3  item">
                        <img src="../img/banner_wed.jpg" alt="">
                        <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                        <div class="price">460.000.000 VNĐ</div>
                        <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                    </div>

                </div>
                <div class="list_page">
                    <div class="page">
                        <a href="">1</a>
                    </div>
                    <div class="page">
                        <a href="">2</a>
                    </div>
                    <div class="page">
                        <a href="">3</a>
                    </div>
                </div>
            </div>
            <!------------------- Thương Hiêu -------------------------->
            <div id="wp-thuonghieu">
                <h2> CÁC THƯƠNG HIỆU NỔI TIẾNG</h2>
                <div id="list-th">
                    <div class="arrow-left">
                        <a href=""><img src="../img/prev4.png" alt=""></a>
                    </div>
                    <ul class="list-item-th">
                        <li class="item-th">
                            <div class="anh">
                                <img src="../img/CA.jpg" alt="">
                                <img src="../img/CK.jpg" alt="">
                                <img src="../img/CS.jpg" alt="">
                                <img src="../img/CT.jpg" alt="">
                            </div>
                        </li>
                        <li class="item-th">
                            <div class="anh">
                                <img src="../img/BU.jpg" alt="">
                                <img src="../img/logo-seiko.jpg" alt="">
                                <img src="../img/logo-SRWatch.jpg" alt="">
                                <img src="../img/logo-Tissot.jpg" alt="">
                            </div>
                        </li>
                        <li class="item-th">
                            <div class="anh">
                                <img src="../img/BU.jpg" alt="">
                                <img src="../img/logo-seiko.jpg" alt="">
                                <img src="../img/logo-SRWatch.jpg" alt="">
                                <img src="../img/logo-Tissot.jpg" alt="">
                            </div>
                        </li>
                        <li class="item-th">
                            <div class="anh">
                                <img src="../img/BU.jpg" alt="">
                                <img src="../img/logo-seiko.jpg" alt="">
                                <img src="../img/logo-SRWatch.jpg" alt="">
                                <img src="../img/logo-Tissot.jpg" alt="">
                            </div>
                        </li>
                    </ul>

                    <div class="arrow-next">
                        <a href=""><img src="../img/prev3.jpg" alt=""></a>
                    </div>
                </div>
            </div>

            <!------------------- footer -------------------------->
        </div>
        <div id="foorter">
            <div class="box">
                <div class="logo"><a href="">logo</a></div>
                <p style="color: white;">Cung cấp sản phẩm với chất lượng cao cho quý khách</p>
            </div>
            <div class="box">
                <h3>NỘI DUNG</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Trang Chủ</a>
                    </div>
                    <div class="item">
                        <a href="">Sản Phảm</a>
                    </div>
                    <div class="item">
                        <a href="">Đồng hồ nam</a>
                    </div>
                    <div class="item">
                        <a href="">Đồng hồ nư</a>
                    </div>
                    <div class="item">
                        <a href="">Đồng hồ đôi</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h2 style="color: white;">Kết nối với chúng tôi</h2>
                <ul class="nav " style="margin-top: 50px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-brands fa-dribbble"></i></a>
                    </li>
                </ul>
            </div>

        </div>
</body>
</html>
