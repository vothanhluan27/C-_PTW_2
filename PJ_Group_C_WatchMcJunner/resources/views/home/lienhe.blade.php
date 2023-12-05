@extends('layout.app')
@section('content')
        <!------------------- Liên hệ -------------------------->
        <div id="wp-lienhe">
            <h3>CONTACT FORM</h3>
            <div id="wrapper-lienhe">
                <form action="" method="post" class="from-lienhe" >
                    <div class="row">
                        <div class="col-6" style="border-right: 1px solid;">
                            <b>Name</b>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                            <b>Phone</b>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-6">
                            <b>Email</b>
                            <input type="email" class="form-control" placeholder="Email">
                            <b>Subject</b>
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="mess">
                        <b>Message</b>
                        <input type="text" class="form-control" placeholder="Message">
                    </div>
                    <div class="nut">
                        <button>SEND</button>
                    </div>
                </form>
            </div>

        </div>
@endsection
    </div>
</body>

</html>
