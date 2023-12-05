<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>WatchMcJunner</title>

    <!-- CND -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/home/bootstrap.min.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('css/home/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/home/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/home/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/home/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-web/css/all.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/index/style.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <!-- <ul class="header-links pull-left">
					<li><a href="#"><i class="fa-solid fa-phone-volume"></i> +0987 633 254</a></li>
					<li><a href="#"><i class="fa-regular fa-envelope"></i> tdc@email.com</a></li>
					<li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i> TP.HCM</a></li>
				</ul> -->
                <ul class="header-links pull-right">
                    <li><a href=""><i class="fa fa-dollar"></i> VNĐ </a></li>
                    <li><a href=""><i class="fa-solid fa-user-tie"></i>Login </i>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{ route('index') }}" class="logo">
                                <br>
                                <h3><strong>WatchMcJunner</strong></h3>
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="{{ route('home.search') }}" method="get">
                                <select class="input-select">
                                    <option value="0">All Result</option>
                                    <!-- <option value="1">Category 1</option>
                                    <option value="1">Category 2</option> -->
                                </select>
                                <input id="keyword" name="search" class="input" placeholder="Tìm kiếm" value="{{ isset($search) ? $search : ''}}">
                                <button type="submit" class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa-regular fa-heart"></i>
                                    <span>Wishlist</span>
                                    <div class="qty"><span>{{ count((array) session('wish')) }}</span></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        @if(session('wish'))
                                        @foreach(session('wish') as $id => $value)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{ asset('img') }}/{{ $value['image'] }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"> {{ $value['name'] }} <a href="#"></a></h3>
                                                <h4 class="product-price"><span class="qty" style="color: #000055"> {{ number_format($value['price']) }} VNĐ</span></h4>
                                            </div>
                                            <button class="delete"><a href="#" target="_self"><strong><i class="fa fa-close" style="color: red;"></i></strong></a></button>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="btn-wish-list">
                                        <a class="primary-btn cta-btn" style="text-align: center;" href="{{ route('wish') }}">View Wish List</a>
                                        <!-- <a href="">View Wish List</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty"><span>{{ count((array) session('cart')) }}</span></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list" id="cart">
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $value)
                                        <div class="product-widget" data-id="{{ $id }}">
                                            <div class="product-img">
                                                <img src="{{ asset('img') }}/{{ $value['image'] }}" width="120px" height="55px" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="/product-detail/{{ $id }}">
                                                        {{ $value['name'] }}
                                                    </a>
                                                </h3>

                                                <h4 class="product-price"><span class="qty" style="color: #000055"> {{ $value['quantity'] }}x</span>{{ number_format($value['price']) }} VNĐ</h4>
                                            </div>
                                            <div class="actions" data-th="">
                                                <button class="delete cart_remove"><a target="_self"><strong><i class="fa fa-close" style="color: red;"></i></strong></a></button>
                                                <!-- <button class="delete cart_remove"><i class="fa fa-close" style="color: red;"></i></button> -->
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="cart-summary">
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $value)
                                        @php $total += $value['price'] * $value['quantity'] @endphp
                                        @endforeach
                                        <h5>SUBTOTAL: {{ number_format( $total ) }} VNĐ</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="{{ route('cart') }}">View Cart</a>
                                        <a href="{{ route('check-out') }}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('index') }}"><strong>Home</strong></a></li>
                    <li><a href="{{ route('watch_boy.index') }}">Đồng Hồ Nam</a></li>
                    <li><a href="{{ route('watch_girl.index') }}">Đồng Hồ Nữ</a></li>
                    <li><a href="{{ route('watch_couple.index') }}">Đồng Hồ Cặp Đôi</a></li>
                    <li><a href="{{ route('hot.index') }}">Hot</a></li>
                    <li><a href="{{ route('sale.index') }}">Sale</a></li>
                    <li><a href="{{route('contact.show')}}">Contact Us</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    @yield('content')
    @yield('about-us')
    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Về chúng tôi</h3>
                            <p>Web shop</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>TP. HCM</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+0987 633 254</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>tdc@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Danh mục</h3>
                            <ul class="footer-links">
                                <li><a href="">Đồng Hồ Nam</a></li>
                                <li><a href="">Đồng Hồ Nữ</a></li>
                                <li><a href="">Đồng Hồ Cặp Đôi</a></li>
                                <li><a href="{{ url('hot') }}">Hot</a></li>
                                <li><a href="">Sale</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông tin</h3>
                            <ul class="footer-links">
                                <li><a href="">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Dịch vụ</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="">View Cart</a></li>
                                <li><a href="">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa-brands fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-paypal"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-cc-discover"></i></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-cc-amex"></i></a></li>
                        </ul>
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->
    <!-- jQuery Plugins -->
    <script type="text/javascript">
        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
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

    <script src="{{ asset('js/index/jquery.min.js') }}"></script>
    <script src="{{ asset('js/index/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/index/slick.min.js') }}"></script>
    <script src="{{ asset('js/index/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/index/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/index/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
