<div id="foorter">
    <div class="box">
        <div class="logo"><a href="">logo</a></div>
        <p style="color: white;">Cung cấp sản phẩm với chất lượng cao cho quý khách</p>
    </div>
    <div class="box">
        <h3>NỘI DUNG</h3>
        <ul class="quick-menu">
            <div class="itemm">
                <a href="">Trang Chủ</a>
            </div>
            <div class="itemm">
                <a href="">Sản Phảm</a>
            </div>
            <div class="itemm">
                <a href="">Đồng hồ nam</a>
            </div>
            <div class="itemm">
                <a href="">Đồng hồ nư</a>
            </div>
            <div class="itemm">
                <a href="">Đồng hồ đôi</a>
            </div>
        </ul>
    </div>
    <div class="box">
        <h2 style="color: white; font-size:24px;">Kết nối với chúng tôi</h2>
        <ul class="nav " style="margin-top: 50px; font-size:24px">
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
                <a class="nav-link" href="lienhe"><i class="fa-solid fa-phone"></i></a>
            </li>
        </ul>
    </div>
</div>
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