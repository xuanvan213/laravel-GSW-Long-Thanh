@extends('admin.masteradmin')
@section('noidung')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Thêm Dự Án Mới</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Chi Tiết Dự Án</h5>
					</div>
					<div class="widget-content nopadding">

					<?php $i = 0; ?>
					@foreach($slider as $value)

						<?php $i += 1; ?>
						<!-- BEGIN USER FORM -->
						<form action="{{asset('admin/edit-slider/'.$value['id'])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
						@method('PUT')
							@csrf

							<div class="control-group">						
											
								<label class="control-label">Thông Tin Slider {{ $i }} :</label>						
									<div class="controls">
										<img src="{{ asset('images/'.$value->image) }}" style="width: 200px"/>
										<br>
										<strong>URL: </strong>
										<input type="text" class="span11" placeholder="Nhập URL" name="url_button" value="{{ $value->url_button }}" /> *
										<br>
										<strong>Text: </strong>	
										<input type="text" class="span11" placeholder="Nhập Text cho nút xem chi tiết" name="text" value="{{ $value->text }}" /> *
									</div>
									<div class="controls">
										<input type="file" name="{{ 'slide'.$i }}" id="{{ 'slide'.$i }}" >										
									</div>								
							</div>	
							<div class="form-actions">
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</div>
						</form>
						@endforeach
						<!-- END USER FORM -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->
@endsection
