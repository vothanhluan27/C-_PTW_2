<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
    <link href="fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/public/js/index/home-js.js') }}"></script>
    <title>Home</title>
</head>
<html>

<body>
<div id="wrapper">
    <div id="header">
            <strong><a href="home" class="nav-logo" style="text-decoration: none; color: red;">GOURP C</a></strong>
            <div id="nav-button">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                <button class="btn white-btn"><a href="login" class="login"><i class="fa-solid fa-user"></i>login</a></button>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="{{url('watch_boy')}}" class="link">Đồng hồ Nam</a></li>
                <li><a href="{{url('watch_girl')}}" class="link">Đồng hồ Nữ</a></li>
                <li><a href="home/watch_couple" class="link">Đồng hồ Đôi</a></li>
                <li><a href="hot" class="link">Hot</a></li>
                <li><a href="sale" class="link">Sale </a></li>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </ul>
        </div>

</body>

</html>
