@extends('admin.masteradmin')
@section('noidung')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Add New Project</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Province Detail</h5>
					</div>
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="{{asset('admin/project')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							@csrf
							<div class="control-group">
								<label class="control-label">Tên Dự Án :</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Tên Dự Án" name="manu_name" /> *
								</div>
							</div>
	
							<div class="control-group">
								<label class="control-label">Chọn Giao Diện :</label>
								<div class="controls">
									<select name="reg_id" id="temp-option" onchange="return getValueOption()">
											<option value="1">Giao Diện 1</option>
											<option value="2">Giao Diện 2</option>
									</select> *
								</div>
							</div>

							<!-- template 1 -->
							<div class="template1" id="template1" style="display:none">
								<div class="control-group" id="proname1" >
									<label class="control-label">Tên Dự Án :</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Tên Dự Án" name="manu_name" /> *
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Chọn Ảnh Cho Slide :</label>
									<div id="imagePre"></div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >										
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >
									</div>
								</div>	

								<div class="control-group">
								  <div class="controls">
									  <label class="control-label">	Giới Thiệu :</label>
								  	<textarea rows="5" cols="100" style="width:95%" name="abouts" id="abouts" >
										
									  </textarea>
								  </div>
								</div>							

							</div>

							<!-- template 2 -->
							<div class="template2" id="template2" style="display:none">
								<div class="control-group" id="proname1" >
									<label class="control-label">Project Name :</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Manufacture name" name="manu_name" /> *
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Choose images :</label>
									<div id="imagePre"></div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >
									</div>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload" >
									</div>
									
								</div>
								
							</div>

							
								<div class="form-actions">
									<button type="submit" class="btn btn-success">Add</button>
								</div>
							</div>

						</form>
						<!-- END USER FORM -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->
<@endsection
