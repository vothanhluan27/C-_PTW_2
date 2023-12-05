@extends('admin.admin-header')
@extends('admin.sidebar')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View list User</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>Table</strong></h3>
            <br>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body p-0">
            {{-- table --}}
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%" class="text-center">
                            ID
                        </th>
                        <th style="width: 40%" class="text-center">
                            Name
                        </th>
                        <th style="width: 40%" class="text-center">
                            Email
                        </th>
                        <th style="width: 40%" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                    <tr>
                        <td style="text-align: center;">{{ $value->id }}</td>
                        <td style="text-align: center;">{{ $value->name }}</td>
                        <td style="text-align: center;">{{ $value->email }}</td>
                        <td class="project-actions text-right">
                            <form action="{{ route('del-user',$value->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('edit',$value->id) }}" style="width: 91px; height: 55px;">
                                    <img src="{{ asset('img/icon/edit2.png') }}" alt="" style="width: 30px; height: 30px;">
                                    <br>
                                    Edit
                                </a>
                                <br>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><img src="{{ asset('img/icon/delete2.png') }}" alt="" style="width: 20px; height: 20px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->
    <!-- /.content -->
</div>
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
