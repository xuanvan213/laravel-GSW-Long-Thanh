@extends('admin.masteradmin')
@section('noidung')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Manage Tour</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i> </a></span>
						<h5>Contents</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>stt</th>
								<th>Tên Dự Án</th>
								<th>Url</th>
								<th>Tiêu đề</th>
								<th>Từ Khóa</th>
								<th>Logo</th>
								<th>Template</th>
							</tr>
							</thead>
							<tbody>
								@foreach($project as $value)
								<tr>
									<td>{{ $value['name'] }}</td>
									<td>{{ $value['url'] }}</td>
									<td>{{ $value['title'] }}</td>
									<td>{{ $value['keywords'] }}</td>
									<td>{{ $value['description'] }}</td>								
									<td><img alt="{{ $value['title'] }}" src="{{ asset('images/'.$value['logo']) }}" style="width: 317px; height: 317px;"/></td>
									<td>{{ $value['template_id']}}</td>
								</tr>								
								@endforeach
							</tbody>
						</table>
						<ul class="pagination">
							
						</ul>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->
@endsection

