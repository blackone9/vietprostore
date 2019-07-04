@extends('admin.layouts.main')
@section('content')
	

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Danh mục</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý danh mục</h1>
		</div>
	</div>
	<!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">	
						<div class="col-md-7">
								<a style="margin-bottom: 15px;" href="{{ route('admin.categories.create') }}" class="btn btn-primary">Thêm mới</a>
							<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
							<div class="vertical-menu">
								<div class="item-menu active" style="background: #5b778c">Danh mục </div>

								@includeWhen(true,'admin.partials.category_rows',[
									'categories'=> $categories,
									'nth' => 0
								])
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/.col-->


	</div>
	<!--/.row-->
</div>

@endsection
@push('js')
	<script>
		$(document).ready(function(){
			$('.btn-delete').click(function(e){
				e.preventDefault();
				let id = $(this).attr('data-id');

				$.ajax({
					url: `/admin/categories/${id}`,
					method: "POST",
					data: {
						_token: "{{ csrf_token() }}",
						_method: "DELETE"
					},
					success: function(){
						window.location.reload();
					}
				});
			});
		});
	</script>
@endpush