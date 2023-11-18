@extends('admin.admin-header')
@extends('admin.sidebar')
@extends('admin.admin-footer')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>ADMIN - Add new product</h1>
      </div>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ url('/admin') }}"> Back</a>
    </div>
  </div><!-- /.container-fluid -->

  @if ($errors->any())
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- Main content -->
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <!-- Name -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Name:</strong>
          <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
      </div>
      <!-- Price -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Price:</strong>
          <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
      </div>
      <!-- Image -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Image:</strong>
          <input type="file" name="image" class="form-control" placeholder="image">
        </div>
      </div>
      <!-- Description -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Description:</strong>
          <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
        </div>
      </div>
      <!-- Type -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Type:</strong>
          <input type="text" name="type" class="form-control" placeholder="Type">
        </div>
      </div>
      <!-- Brand -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Brand:</strong>
          <input type="text" name="brand" class="form-control" placeholder="Brand">
        </div>
      </div>
      <!-- Status -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Status:</strong>
          <input type="text" name="status" class="form-control" placeholder="Status">
        </div>
      </div>
      <!-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="status">Status:</label>
          <select name="category_id" id="status" class="form-control custom-select">
            <option selected disabled>Select one</option>
            <option value="disable">Hết hàng</option>
            <option value="active">Còn hàng</option>
          </select>
        </div>
      </div> -->
      <!-- category_id -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="category_id">category_id</label>
          <select name="category_id" id="inputCategory" class="form-control custom-select">
            <option selected disabled>Select one</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputFeature">Feature:</label>
        <br>
        <input name="feature" type="checkbox" value="1" id="inputFeature" style="width: 30px; height: 30px;">
      </div>
      <div class="row">
        <!-- <div class="col-12">
          <input type="submit" value="Add" class="btn btn-success float-right">
        </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
  </form>

  <!-- /.content -->
</div>
@endsection

