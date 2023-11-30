@extends('layout.app')
@section('content')
<!------------------- Hot -------------------------->
<div class="container hot" style="margin-right: 13px;">
    <div class="hot-header" style="padding-bottom: 10px;">
        <div class="row hot-row">
            <div class="col ">
                <div class="icon">
                    <a href="home" style="color: black;"><i class="fa-solid fa-house"></i></a>
                </div>
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
                            <div class="row add">
                                <div class="col-md-6 product-dohang">
                                    <a href="" style=" color: #b5a3a3;text-decoration: none;">Add<i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-md-6 product-yeuthich">
                                    <a href="" style=" color: #b5a3a3;"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../img/rolex-black.jpg" alt="">
                            <div class="name">Đồng hồ Rolex Air-King 116900</div>
                            <div class="price">465.000.000 VNĐ</div>
                            <div class="row add">
                                <div class="col-md-6 product-dohang">
                                    <a href="" style=" color: #b5a3a3;text-decoration: none;">Add<i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-md-6 product-yeuthich">
                                    <a href="" style=" color: #b5a3a3;"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../img/rolex-blu.jpg" alt="">
                            <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                            <div class="price">260.000.000 VNĐ</div>
                            <div class="row add">
                                <div class="col-md-6 product-dohang">
                                    <a href="" style=" color: #b5a3a3;text-decoration: none;">Add<i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-md-6 product-yeuthich">
                                    <a href="" style=" color: #b5a3a3;"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../img/rolex.jpg" alt="">
                            <div class="name">Đồng hồ Rolex Lady-Datejust 28 Chocolate 279171 (Fluted/Jubilee)</div>
                            <div class="price">460.000.000 VNĐ</div>
                            <div class="row add">
                                <div class="col-md-6 product-dohang">
                                    <a href="" style=" color: #b5a3a3;text-decoration: none;">Add<i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-md-6 product-yeuthich">
                                    <a href="" style=" color: #b5a3a3;"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../img/rolex-blu.jpg" alt="">
                            <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                            <div class="price">260.000.000 VNĐ</div>
                            <div class="row add">
                                <div class="col-md-6 product-dohang">
                                    <a href="" style=" color: #b5a3a3;text-decoration: none;">Add<i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-md-6 product-yeuthich">
                                    <a href="" style=" color: #b5a3a3;"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../img/rolex-blu.jpg" alt="">
                            <div class="name">Đồng hồ Rolex Oyster Perpetual 36 Bright Blue 126000</div>
                            <div class="price">260.000.000 VNĐ</div>
                            <div class="row add">
                                <div class="col-md-6 product-dohang">
                                    <a href="" style=" color: #b5a3a3;text-decoration: none;">Add<i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-md-6 product-yeuthich">
                                    <a href="" style=" color: #b5a3a3;"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</body>

</html>