@extends('admin.admin-header')
@extends('admin.sidebar')

@section('content')
@php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
@endphp
<div class="content-wrapper">
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <h3 class="card-header text-center">ADD VOUCHER</h3>
                        <div class="card-body">
                            <form action="{{ route('customvoucher.custom') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="mã giảm giá" id="code_voucher" class="form-control" name="code_voucher" required autofocus>
                                    @if ($errors->has('mavoucher'))
                                    <span class="text-danger">{{ $errors->first('mavoucher') }}</span>
                                    @endif
                                </div>



                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Số giá trị % giảm" id="reduce" class="form-control" name="reduce" required autofocus>
                                    @error('expireddate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('reduce')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('code_voucher')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    Ngày bắt đầu Voucher: <input type="date" placeholder="Created Date" id="createddate" name="createddate" required autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    Ngày hến hạn Voucher: <input type="date" placeholder="Expired Date" id="expireddate" name="expireddate" required autofocus>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success btn-block">ADD VOUCHER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="content-wrapper">
        @endsection
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('js/demo.js') }}"></script>
    </body>

    </html>
