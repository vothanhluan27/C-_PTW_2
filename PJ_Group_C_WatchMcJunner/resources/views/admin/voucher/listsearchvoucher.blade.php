@extends('admin.admin-header')
@extends('admin.sidebar')

@section('content')
@php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
@endphp
<div class="content-wrapper">
<form action="{{ route('searchvoucher') }}" method="GET">
  <div CLASS="input-group">
    @csrf
    <input type="text" name= "keyword" CLASS="form-control bg-light border-2 small " placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
    <div CLASS="input-group-append">
      <button CLASS="btn btn-primary" type="submit">
        <i CLASS="fas fa-search fa-sm">Seach</i>
      </button>
    </div>
  </div>
  </form>
  <!-- DataTales Example -->
  <div CLASS="card shadow mb-12">
    <div CLASS="card-header py-3">

      <h6><a href="{{route('addvoucher')}}" class="btn btn-primary">ADD VOUCHER</a></h6>
    </div>
    <div CLASS="card-body">
      <div CLASS="table-responsive">
        <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="text-align: center; width: 10%">Mã Voucher</th>
              <th style="text-align: center; width: 10%">Ngày bắt đầu Voucher</th>
              <th style="text-align: center; width: 10%">Ngày kết thúc Voucher</th>
              <th style="text-align: center; width: 10%">Phần trăm giảm giá</th>
              <th style="text-align: center; width: 10%">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($vouchers as $voucher)
            <tr>
              <td style="text-align: center;">{{ $voucher->code_voucher }}</td>
              <td style="text-align: center;">{{ $voucher->createddate }}</td>
              <td style="text-align: center;">{{ $voucher->expireddate }}</td>
              <td style="text-align: center;">{{ $voucher->reduce }}</td>
              <td>
                  <a href="{{ route('getdataedtvoucher', $voucher->id) }}"
                      style="width: 91px; height: 55px;"
                      class="btn btn-success ">Edit</a>
                  <a href="{{ route('deletevoucher', $voucher->id) }}"
                      style="width: 91px; height: 55px;"
                      class="btn btn-success ">Delete</a>
              </td>
          </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
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
