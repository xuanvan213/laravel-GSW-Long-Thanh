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

						<!-- BEGIN USER FORM -->
						<form action="{{asset('admin/form')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							@csrf
							<div class="control-group">
								<label class="control-label">Tên Dự Án :</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Tên Dự Án" name="manu_name" /> *
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Chọn Ảnh Cho Slider :</label>
								<div class="controls">
									<input type="file" name="slide1" id="slide1" >										
								</div>
								<div class="controls">
									<input type="file" name="slide2" id="slide2" >
								</div>
								<div class="controls">
									<input type="file" name="slide3" id="slide3">
								</div>
								<div class="controls">
									<input type="file" name="slide4" id="slide4">
								</div>
								<div class="controls">
									<input type="file" name="slide5" id="slide5" >
								</div>
								<div class="controls">
									<input type="file" name="slide6" id="slide6" >
								</div>
							</div>	
							<div class="control-group" >
								<label class="control-label">Nhập URL Xem Chi Tiết :</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="vd:https://anzbds.com " name="url_slide" /> *
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Nhập Text Nút Xem Chi Tiết:</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="vd: Xem Chi Tiết" name="text_btnDetail" /> *
								</div>
							</div>
	
							<!-- <div class="control-group">
								<label class="control-label">Chọn Giao Diện :</label>
								<div class="controls">
									<select name="reg_id" id="temp-option" onchange="return getValueOption()">
											<option value="1">Giao Diện 1</option>
											<option value="2">Giao Diện 2</option>
									</select> *
								</div>
							</div> -->
							<div class="control-group">
									<label class="control-label">	Giới Thiệu :</label>
									<div class="controls">									  
										<textarea rows="5" cols="100" style="width:95%" name="abouts" id="abouts" autofocus>
											
										</textarea>									  
									</div>
							</div>

								<div class="control-group">
									<label class="control-label">Chọn Ảnh Tổng Quan :</label>
									<div class="controls">
										<input type="file" name="overview_img" id="overview_img" >										
									</div>
								</div>	

								<div class="control-group">
									<label class="control-label"> Chọn Ảnh Tiện Ích Dự Án :</label>
									<div id="imagePre"></div>
									<div class="controls">
										<input type="file" name="imgUtilities1" id="imgUtilities1" >
									</div>
									<div class="controls">
										<input type="file" name="imgUtilities2" id="imgUtilities2">
									</div>
									<div class="controls">
										<input type="file" name="imgUtilities3" id="imgUtilities3">
									</div>
									<div class="controls">
										<input type="file" name="imgUtilities4" id="imgUtilities4" >
									</div>									
								</div>

								<div class="control-group">
									<label class="control-label">Chọn Ảnh Cho Thư Viện :</label><br>
								
									<div class="controls">
										<input type="file" name="gallery1" id="gallery1" >						
										<input type="text"  name="img_text1" id="img_text1">										
									</div>
									<div class="controls">
										<input type="file" name="gallery2" id="gallery2" >
										<input type="text"  name="img_text2" id="img_text2">										
									</div>
									<div class="controls">
										<input type="file" name="gallery3" id="gallery3">
										<input type="text"  name="img_text3" id="img_text3">
									</div>
									<div class="controls">
										<input type="file" name="gallery4" id="gallery4">
										<input type="text"  name="img_text4" id="img_text4">
									</div>
									<div class="controls">
										<input type="file" name="gallery5" id="gallery5" >
										<input type="text"  name="img_text5" id="img_text5">
									</div>
									<div class="controls">
										<input type="file" name="gallery6" id="gallery6" >
										<input type="text"  name="img_text6" id="img_text6">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"> Chọn Ảnh Căn Hộ Mẫu :</label>
									<div class="controls">
										<input type="file" name="houseTemplate1" id="houseTemplate1" >
									</div>
									<div class="controls">
										<input type="file" name="houseTemplate2" id="houseTemplate2">
									</div>
									<div class="controls">
										<input type="file" name="houseTemplate3" id="houseTemplate3">
									</div>
									<div class="controls">
										<input type="file" name="houseTemplate4" id="houseTemplate4" >
									</div>									
								</div>
								<div class="control-group">
									<label class="control-label"> Chọn Ảnh Tiến Độ Thi Công:</label>
									<div class="controls">
										<input type="file" name="constructionProgress1" id="constructionProgress1" >
									</div>
									<div class="controls">
										<input type="file" name="constructionProgress2" id="constructionProgress2">
									</div>
									<div class="controls">
										<input type="file" name="constructionProgress3" id="constructionProgress3">
									</div>
									<div class="controls">
										<input type="file" name="constructionProgress4" id="constructionProgress4" >
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
@endsection
