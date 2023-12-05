@extends('index.header')

@section('content')

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
        <img src="{{ asset('img/img1.jpg') }}" alt="">
        <img src="{{ asset('img/img2.jpg') }}" alt="">
        <img src="{{ asset('img/img3.jpg') }}" alt="">
    </div>
</div>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm mới của tuần</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li><a href="index.php?manu_id="></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->

            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                @foreach ($data as $value)
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <a href="/product-detail/{{ $value->product_id }}"><img src="/img/{{ $value->image }}" style="height: 263px; width: 263px;" alt=""></a>
                                    </div>
                                    <div class="product-body">
                                        <input type="hidden" value="{{$value->product_id}}">
                                        <h3 class="product-name"><a href="/product-detail/{{ $value->product_id }}">{{ $value->name }}</a></h3>
                                        <h4 class="product-price" style="margin: 0 ;">{{ number_format($value->price) }} VNĐ</h4>
                                        <br>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><a href="{{ route('add_to_wish', $value->product_id) }}" target="_self"><i class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a href="javascript:void(0)" id="show-product" data-url="{{ route('quick-view', $value->product_id) }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" type="submit" name="add_to_cart"><a href="{{ route('add_to_cart', $value->product_id) }}" target="_self"> add to cart</a><i class="fa fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <!-- /product -->
                                @endforeach

                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->

                        <!-- Modal -->
                        <div class="modal fade" id="productShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel" style="text-align: center;">Xem nhanh thông tin</h4>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- <img id="product-image" src="" alt="image" style="width:100%;max-width:300px"> -->
                                        <p><strong>Tên sản phẩm:</strong> <span id="product-name"></span></p>
                                        <br>
                                        <p><strong>Giá: </strong> <span id="product-price"></span> VNĐ</p>
                                        <p><strong>Hãng: </strong> <span id="product-brand"></span></p>
                                        <p><strong>Loại: </strong> <span id="product-type"></span></p>
                                        <p><strong>Trạng thái: </strong> <span id="product-status"></span></p>
                                        <p><strong>Mô tả: </strong> <span id="product-description"></span></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products tab & slick -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3 id="days"></h3>
                                <span>Ngày</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id="hours"></h3>
                                <span>Giờ</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id="mins"></h3>
                                <span>Phút</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id="secs"></h3>
                                <span>Giây</span>
                            </div>
                        </li>
                    </ul>
                    <script>
                        // Set the date we're counting down to
                        var countDownDate = new Date("December 28, 2023 00:00:00").getTime();

                        // Update the count down every 1 second
                        var x = setInterval(function() {

                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Output the result in an element with id="demo"
                            document.getElementById("days").innerHTML = days;
                            document.getElementById("hours").innerHTML = hours;
                            document.getElementById("mins").innerHTML = minutes;
                            document.getElementById("secs").innerHTML = seconds;

                            // If the count down is over, write some text
                            if (distance < 0) {
                                clearInterval(x);
                                document.getElementById("days").innerHTML = "EXPIRED";
                                document.getElementById("hours").innerHTML = "EXPIRED";
                                document.getElementById("mins").innerHTML = "EXPIRED";
                                document.getElementById("secs").innerHTML = "EXPIRED";
                            }
                        }, 1000);
                    </script>
                    <h2 class="text-uppercase">ƯU ĐÃI HOT TUẦN NÀY</h2>
                    <p>Bộ sưu tập mới GIẢM GIÁ tới 50%</p>
                    <a class="primary-btn cta-btn" href="{{route('index')}}">Mua ngay</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION 2-->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm của chúng tôi</h3>
                    <!-- <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab2">Speakers</a></li>
                            <li><a data-toggle="tab" href="#tab2">Headphones</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                @foreach ($data as $value)
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="/img/{{ $value->image }}" style="height: 263px; width: 263px;" alt="">

                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name">{{ $value->name }}</h3>
                                        <h4 class="product-price">{{ number_format($value->price) }} VNĐ</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><a href="{{ route('add_to_wish', $value->product_id) }}" target="_self"><i class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <!-- <button class="add-to-cart-btn" type="submit" name="add_to_cart"></i></button> -->
                                        <button class="add-to-cart-btn" type="submit" name="add_to_cart"><a href="{{ route('add_to_cart', $value->product_id) }}" target="_self"> add to cart</a><i class="fa fa-shopping-cart"></i></button>
                                    </div>
                                </div>

                                <!-- /product -->
                                @endforeach
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->

<!-- /SECTION -->
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


<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Đăng ký nhận thông tin <strong>Sản phẩm mới</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Nhập Email của bạn">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->
@endsection

@section('scripts')

<!-- script Modal -->
<script type="text/javascript">
    $(document).ready(function() {

        $('body').on('click', '#show-product', function() {
            var userURL = $(this).data('url');

            // var img = document.getElementById('myImg');
            // var modalImg = document.getElementById("img01");
            // img.onclick = function() {
            //     modal.style.display = "block";
            //     modalImg.src = this.src;
            // }


            $.get(userURL, function(data) {

                // Description
                var description = data.description;
                var shortenedDescription = description.substring(0, 300);

                if (description.length > 300) {
                    shortenedDescription += '...';
                }

                // Format price
                formatter = new Intl.NumberFormat('vi-VN', {
                    currency: 'VND'
                });
                var formattedPrice = formatter.format(data.price);
                var imagePath = data.image_path;


                $('#productShowModal').modal('show');
                // $('#roduct-image').attr('src', '/img/' + data.image);
                $('#product-name').text(data.name);
                $('#product-price').text(formattedPrice);
                $('#product-brand').text(data.brand);
                $('#product-type').text(data.type);
                $('#product-status').text(data.status);
                $('#product-description').text(shortenedDescription);
            })
        });

    });
</script>

@endsection
