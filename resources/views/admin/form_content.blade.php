@extends('admin.masteradmin')
@section('noidung')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Thêm Dự Án</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Thêm Dự Án</h5>
					</div>
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="{{asset('admin/project')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							@csrf
							<div class="control-group">
								<label class="control-label">Nhập Tên:</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Tên Dự Án" name="project-name" /> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Nhập Url:</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Nhập URL" name="url-project" /> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Nhập Keywords:</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Keywords" name="keyword" /> *
								</div>
							</div>
							<div class="control-group">
									<label class="control-label">	Giới Thiệu :</label>
									<div class="controls">									  
										<textarea rows="5" cols="100" style="width:95%" name="abouts" id="abouts" >
											
										</textarea>									  
									</div>
							</div>
								<div class="control-group">
									<label class="control-label">Chọn Logo :</label>
									<div id="imagePre">
									</div>
									<div class="controls">
										<input type="file" name="logoProject" id="logoProject" onchange="return fileValidation()" >										
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Chọn Ảnh Cho Giới Thiệu :</label>
									<div id="imgAbout"></div>
									<div class="controls">
										<input type="file" name="imageAbouts" id="imageAbouts" onchange="return setImageAbout()">										
									</div>
								</div>
	
							<div class="control-group">
								<label class="control-label">Chọn Giao Diện :</label>
								<div class="controls">
									<select name="reg_id" id="temp-option" onchange="return getValueOption()">
											<option value="1" selected>Giao Diện 1</option>
											<option value="2">Giao Diện 2</option>
									</select> *
								</div>
							</div>

							<!-- template 1 -->
							<div class="template1" id="template1" style="display:none">								

								<div class="control-group">
									<label class="control-label">Chọn Ảnh Cho Slide :</label>
									<div class="controls">
										<input type="file" name="slide1Template1" id="slide1Template1" >										
									</div>
									<div class="controls">
										<input type="file" name="slide2Template1" id="slide2Template1" >
									</div>
									<div class="controls">
										<input type="file" name="slide3Template1" id="slide3Template1">
									</div>
									<div class="controls">
										<input type="file" name="slide4Template1" id="slide4Template1">
									</div>
									<div class="controls">
										<input type="file" name="slide5Template1" id="slide5Template1" >
									</div>
									<div class="controls">
										<input type="file" name="slide6Template1" id="slide6Template1" >
									</div>
								</div>	

								<div class="line-before"></div>
								<div class="control-group">
									<label class="control-label">Chọn Ảnh Tiện Ích:</label>
									<div class="controls">
										<input type="file" name="imageUtilities1" id="imageUtilities1" >										
									</div>
									<div class="controls">
										<input type="file" name="imageUtilities2" id="imageUtilities2" >
									</div>
									<div class="controls">
										<input type="file" name="imageUtilities3" id="imageUtilities3">
									</div>
									<div class="controls">
										<input type="file" name="imageUtilities4" id="imageUtilities4">
									</div>
									<div class="controls">
										<input type="file" name="imageUtilities5" id="imageUtilities5" >
									</div>
									<div class="controls">
										<input type="file" name="imageUtilities6" id="imageUtilities6" >
									</div>
								</div>

								<div class="line-before"></div>

								<div class="control-group">
									<label class="control-label">Chọn Ảnh Thư Viện:</label>
									<table>
										<th>
											<div class="controls">
												<input type="file" name="imageGallery1" id="imageGallery1" >										
											</div>
											<div class="controls">
												<input type="file" name="imageGallery2" id="imageGallery2" >
											</div>
											<div class="controls">
												<input type="file" name="imageGallery3" id="imageGallery3">
											</div>
											<div class="controls">
												<input type="file" name="imageGallery4" id="imageGallery4">
											</div>
											<div class="controls">
												<input type="file" name="imageGallery5" id="imageGallery5" >
											</div>
											<div class="controls">
												<input type="file" name="imageGallery6" id="imageGallery6" >
											</div>
										</th>
										<th>
											<div class="controls">
												<input type="file" name="imageGallery1" id="imageGallery1" >										
											</div>
											<div class="controls">
												<input type="file" name="imageGallery2" id="imageGallery2" >
											</div>
											<div class="controls">
												<input type="file" name="imageGallery3" id="imageGallery3">
											</div>
											<div class="controls">
												<input type="file" name="imageGallery4" id="imageGallery4">
											</div>
											<div class="controls">
												<input type="file" name="imageGallery5" id="imageGallery5" >
											</div>
											<div class="controls">
												<input type="file" name="imageGallery6" id="imageGallery6" >
											</div>
										</th>
									</table>

								</div>	
								
								<div class="line-before"></div>
								<div class="control-group">
									<label class="control-label">Chọn Ảnh Căn Hộ Mẫu:</label>
									<table>
										<tr>
											<th>
												<div class="controls ip-table">
													<input type="file" name="housetemplate1" id="housetemplate1" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="housetemplate2" id="housetemplate2" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="housetemplate3" id="housetemplate3" >										
												</div>
											</th>
										</tr>
										<tr>
											<th>
												<div class="controls ip-table">
													<input type="file" name="housetemplate4" id="housetemplate4" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="housetemplate5" id="housetemplate5" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="housetemplate6" id="housetemplate6" >										
												</div>
											</th>
										</tr>
										
									</table>									
								</div>

								<div class="line-before"></div>
								<div class="control-group">
									<label class="control-label">Chọn Ảnh Tiến Độ Dự Án:</label>
									<table>
										<tr>
											<th>
												<div class="controls ip-table">
													<input type="file" name="projectStatus1" id="projectStatus1" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="projectStatus2" id="projectStatus2" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="projectStatus3" id="projectStatus3" >										
												</div>
											</th>
										</tr>
										<tr>
											<th>
												<div class="controls ip-table">
													<input type="file" name="projectStatus4" id="projectStatus4" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="projectStatus5" id="projectStatus5" >										
												</div>
											</th>
											<th>
												<div class="controls ip-table">
													<input type="file" name="projectStatus6" id="projectStatus6" >										
												</div>
											</th>
										</tr>
										
									</table>									
								</div>

							</div>

							<!-- template 2 -->
							<div class="template2" id="template2" style="display:none">

								<div class="control-group">
									<label class="control-label">Chọn Ảnh Cho Slide :</label>
									<div id="imagePre"></div>
									<div class="controls">
										<input type="file" name="slide1Template2" id="slide1Template2" >										
									</div>
									<div class="controls">
										<input type="file" name="slide2Template2" id="slide2Template2" >
									</div>
									<div class="controls">
										<input type="file" name="slide3Template2" id="slide3Template2">
									</div>
									<div class="controls">
										<input type="file" name="slide4Template2" id="slide4Template2">
									</div>
									<div class="controls">
										<input type="file" name="slide5Template2" id="slide5Template2" >
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Nhập Mô Tả Cuộc Sống:</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Mô Tả Cuộc Sống" name="describeLife2" /> *
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Nhập Mô Tả Vị Trí:</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Mô Tả Vị Trí" name="locationDescription2" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nhập Giá Khởi Điểm</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Giá Khởi Điểm" name="startingPrice2" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Sảnh Căn Hộ:</label>
									<div class="controls">
										<input type="file" name="apartmentHall12" id="apartmentHall12" >										
									</div>
									<div class="controls">
										<input type="file" name="apartmentHall22" id="apartmentHall22" >
									</div>
									<div class="controls">
										<input type="file" name="apartmentHall32" id="apartmentHall32">
									</div>
									<div class="controls">
										<input type="file" name="apartmentHall42" id="apartmentHall42">
									</div>
									<div class="controls">
										<input type="file" name="apartmentHall52" id="apartmentHall52" >
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nhập Chức Năng Căn Hộ</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Chức năng căn hộ" name="functionalApartments" /> *
									</div>
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
