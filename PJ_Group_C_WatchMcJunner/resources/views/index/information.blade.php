@extends('index.header')

@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Account Information</h3>
				<ul class="breadcrumb-tree">
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Order Details -->
			<div class="col-md-5 order-details" style="margin-left: 350px;">
				<div class="section-title text-center">
					<h3 class="title" style="padding-bottom: 30px;">Your Information</h3>
					<h4 style="color: red;"><strong></strong></h4>
					
						<div><a href="">Nguyễn Anh Quốc</a></div>
						
					
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<section class="content" style="padding-bottom: 50px;">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<a class="btn btn-success btn-sm" href="add-info">
					<i class="fas fa-plus"></i> Add Information
				</a>
				<br>
			</div>
			<div class="card-body p-0">
				<table class="table table-striped projects">
					<thead>
						<tr>
							<th style="width: 20%">
								Name
							</th>
							<th style="width: 10%" class="text-center">
								Date of bird
							</th>
							<th style="width: 30%" class="text-center">
								Address
							</th>
							<th style="width: 20%" class="text-center">
								Phone
							</th>
							<th style="width: 20%" class="text-center">
								CCCD
							</th>
							<th style="width: 20%">
							</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								<td style="text-align: center;"></td>
								<td style="text-align: center;"></td>
								<td style="text-align: center;"></td>
								<td style="text-align: center;"></td>
								<td style="text-align: center;"></td>
								<td class="project-actions text-right">
					
										<i class="fas fa-pencil-alt">
										</i>
										Edit
									
								</td>
							</tr>
						
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

	</section>

	@endsection
