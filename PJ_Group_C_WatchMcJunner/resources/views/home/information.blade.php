@extends('layout.app')
@section('content')
<!------------------- thông tin cá nhân -------------------------->
<div id="wp-thongtin">
    <h3>THÔNG TIN CÁ NHÂN</h3>
    <div class="container  ">
        <div class="row wrapper-thongtin">
            <div class="col-5 ">
                <div class="form-anh" style="padding-top: 70px;">
                    <div class="anh">
                        <img src="../img/img2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-thongtin">
                    <div class="thongtin">
                        <b>Tên:</b>
                        <p> Nguyễn Anh Quốc</p>
                        <b>Tên tài Khoản:</b>
                        <p>Quốc buồn đời</p>
                        <b>Email:</b>
                        <p>AnhQuoc@gmail.com</p>
                        <b> Phone:</b>
                        <p>09877635221</p>
                        <b> Địa Chỉ:</b>
                        <p>Biên Hòa, Đồng Nai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 style="border-bottom: 3px solid;">Chỉnh Sửa Thông Tin</h4>
    <div id="wrapper-capnhat">
        <form action="" method="post" class="form-infor">
            <div class="name-capnhat">
                <p>Account name</p>
                <p>Name</p>
                <p>Email</p>
                <p>Phone </p>
                <p>Address</p>
                <p>Hình ảnh</p>
            </div>
            <div class="input-name">
                <p>: <input type="text" placeholder="Account name"></p>
                <p>: <input type="text" placeholder="Name"><br></p>
                <p>: <input type="email" placeholder="Email"><br></p>
                <p>: <input type="text" placeholder="Phone"><br></p>
                <p>: <input type="text" placeholder="Address"><br></p>
                <p>: <input type="file" id="file-upload" multiple required /></p>
            </div>
        </form>
        <div class="nut">
            <button>Cập Nhật</button>
        </div>

    </div>
</div>

@endsection

</body>

</html>