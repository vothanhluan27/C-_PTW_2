<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/header.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <!-- 0 -->
	<!-- Bootstrap -->
	<!-- <link type="text/css" rel="stylesheet" href="{{ asset('css/index/bootstrap.min.css') }}" /> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->

    <title>Home</title>

</head>

<body>
    <div id="top"></div>
    <div class="wrapper">
        <!-- <div id="header">
            <a href="" class="nav-logo">logo</a>
            <div id="nav-button">
                <a href=""><i class="fa fa-heart"></i></a>
                <button class="btn white-btn"><a href="login" class="login">login</a></button>
            </div>
        </div> -->



        <div id="menu">
            <ul>
                <li><a href="#" class="link active">Danh Mục</a></li>
                <li><a href="#" class="link">Đồng hồ Nam</a></li>
                <li><a href="#" class="link">Đồng hồ Nữ</a></li>
                <li><a href="#" class="link">Đồng hồ Đôi</a></li>
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
        <a href="#top" class="toptop">
            <i class="fa-solid fa-arrow-up-from-bracket"></i>
        </a>
</body>
<script>
    const arrowleft = document.querySelector('.arrow-left');
    const arrowext = document.querySelector('.arrow-next');
    const listth = document.querySelector('.list-item-th');
    const listitemth = document.querySelectorAll('.list-item-th .item-th');

    var translateY = 0;
    var count = listitemth.length
    console.log(count);

    arrowleft.addEventListener('click', function(event) {
        event.preventDefault()

        if (count == 4) {
            // Xem hết
            return false
        }
        translateY += 118;
        listth.style.transform = `translateY(${translateY}px)`
        count++;
    })
    arrowext.addEventListener('click', function(event) {
        event.preventDefault()
        if (count == 1) {
            // Xem hết
            return false
        }
        translateY += -118;
        listth.style.transform = `translateY(${translateY}px)`;
        count--;
    })
</script>

</html>
