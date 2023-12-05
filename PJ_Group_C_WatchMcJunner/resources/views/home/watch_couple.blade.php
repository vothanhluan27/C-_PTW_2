<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/watch_couple.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <title>Đồng hồ đôi</title>
</head>

<body>
    <div id="wrapper">
        <div class="container" id="header">
            <img src="{{ asset('img/logo-seiko.jpg') }}" alt="" srcset="">
            <div id="nav-button">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                <button class="btn white-btn"><a href="login" class="login"><i class="fa-solid fa-user"></i>User</a></button>
            </div>
        </div>
        <div class="container" id="menu">
            <ul>
                <li><a href="watch_boy" class="link">Đồng hồ Nam</a></li>
                <li><a href="watch_girl" class="link">Đồng hồ Nữ</a></li>
                <li><a href="watch_couple" class="link">Đồng hồ Đôi</a></li>
                <li><a href="hot" class="link active">Hot</a></li>
                <li><a href="sale" class="link">Sale </a></li>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </ul>
        </div>
        <!------------------- Hot -------------------------->
        <div class="hot container" style="margin-right: 13px;">
            <div class="hot-header" style="padding-bottom: 10px;">
                <div class="row hot-row">
                    <div class="col ">
                        <div class="icon">
                            <a href="home" style="color: black;"><i class="fa-solid fa-house"></i></a>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <button class="icon" style="background: none;border-radius: 10px;padding: 0px 50px 0px 50px;">Đồng hồ Đôi</button>
                    </div>
                    <div class="col">
                        <b style="padding-right: 10px;">Hiển thị kết quả tìm kiếm: </b>
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-3 loc">
                        <div class="boloc"><button style="background: none;border-radius: 10px;padding: 10px 20px 10px 20px;border-radius: 10px;">Bộ lọc</button></div>
                        <div class="giatien">
                            <label for="customRange1" class="form-label" style="font-weight: bold;padding-right: 178px;padding-top: 44px">Giá Tiền</label>
                            <input type="range" class="form-range" id="customRange1">
                        </div>
                        <div class="th-anh">
                            <label for="" style="font-weight: bold;padding-right: 122px;padding-top: 44px;">Thương Hiệu</label>
                            <ul class="chon-th" style="list-style: none">
                                <li>
                                    <img src="../img/BU.jpg" alt="">
                                    <img src="../img/logo-seiko.jpg" alt="">
                                </li>
                                <li>
                                    <img src="../img/logo-SRWatch.jpg" alt="">
                                    <img src="../img/logo-Tissot.jpg" alt="">
                                </li>
                                <li>
                                    <img src="../img/CA.jpg" alt="">
                                    <img src="../img/CK.jpg" alt="">
                                </li>
                                <li>
                                    <img src="../img/CS.jpg" alt="">
                                    <img src="../img/CT.jpg" alt="">
                                </li>

                            </ul>
                        </div>
                        <div class="chonmau" style="padding-top: 30px;padding-right: 15px;">
                            <label for="exampleColorInput" class="form-label" style="padding-right: 44px;padding-buttom: 20px;font-weight: bold;">Chọn Màu</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                        </div>

                    </div>
                    <div class="col-9 ">
                        <div class=" container list-sanpham">
                            <div class="row hang1">
                                <div class="item">
                                    <img src="../img/rolex.jpg" alt="">
                                    <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                                    <div class="price">460.000.000 VNĐ</div>
                                    <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                                </div>
                                <div class="item">
                                    <img src="../img/rolex-black.jpg" alt="">
                                    <div class="name">Đồng hồ Rolex Air-King 116900</div>
                                    <div class="price">465.000.000 VNĐ</div>
                                    <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                                </div>
                                <div class="item">
                                    <img src="../img/rolex-blu.jpg" alt="">
                                    <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                                    <div class="price">260.000.000 VNĐ</div>
                                    <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                                </div>
                                <div class="item">
                                    <img src="../img/rolex.jpg" alt="">
                                    <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                                    <div class="price">460.000.000 VNĐ</div>
                                    <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                                </div>
                                <div class="item">
                                    <img src="../img/rolex-blu.jpg" alt="">
                                    <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                                    <div class="price">260.000.000 VNĐ</div>
                                    <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                                </div>
                                <div class="item">
                                    <img src="../img/rolex-blu.jpg" alt="">
                                    <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                                    <div class="price">260.000.000 VNĐ</div>
                                    <div class="add"><a href="">Add<i class="fa-solid fa-cart-shopping"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------- footer -------------------------->
        <div id="foorter">
            <div class="box">
                <div class="logo"><a href="">logo</a></div>
                <p style="color: white;">Cung cấp sản phẩm với chất lượng cao cho quý khách</p>
            </div>
            <div class="box">
                <h3>NỘI DUNG</h3>
                <ul class="quick-menu">
                    <div class="icon">
                        <a href="">Trang Chủ</a>
                    </div>
                    <div class="icon">
                        <a href="home">Sản Phẩm</a>
                    </div>
                    <div class="icon">
                        <a href="">Đồng Hồ Nam</a>
                    </div>
                    <div class="icon">
                        <a href="">Đồng Hồ Nữ</a>
                    </div>
                    <div class="icon">
                        <a href="">Đồng Hồ Đôi</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h2 style="color: white;font-size:24px">Kết nối với chúng tôi</h2>
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
    </div>
</body>
</html>
