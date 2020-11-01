
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mobile Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/uniform.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/select2.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/matrix-style.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/matrix-media.css') }}" />
	<link href="{{ asset('/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
		ul.pagination{
			list-style: none;
			float: right;
		}
		ul.pagination li.active{
			font-weight: bold
		}
		ul.pagination li{
		  
		  display: inline-block;
		  padding: 10px
		}
	</style>
	<script>
	function fileValidation(){
		var fileInput = document.getElementById('slide1');
		var filePath = fileInput.value;//lấy giá trị input theo id
		var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;//các tập tin cho phép
		//Kiểm tra định dạng
		if(!allowedExtensions.exec(filePath)){
			alert('Vui lòng upload các file có định dạng: .jpeg/.jpg/.png/.gif only.');
			fileInput.value = '';
			return false;
		}else{
			//Image preview
			if (fileInput.files && fileInput.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
				document.getElementById('img-slide1').innerHTML = '<img style="width:266px;height:266px;" src="'+e.target.result+'"/>';
				};
				reader.readAsDataURL(fileInput.files[0]);
			}
		}
	}
</script>
</head>
<body>

<!--Header-part-->
<div id="header">
	<h1><a href="dashboard.html">Dashboard</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav">
		<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
				<li class="divider"></li>
				<li><a href=""><i class="icon-key"></i> Log Out</a></li>
			</ul>
		</li>
		<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
				<li class="divider"></li>
				<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
				<li class="divider"></li>
				<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
				<li class="divider"></li>
				<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
			</ul>
		</li>
		<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
		<li class=""><a title="" href= "{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                <i class="icon icon-share-alt"></i> <span class="text"></span></a></li>
	</ul>
</div>

<!--start-top-serch-->
<div id="search">
	<form action="result.html" method="get">
	<input type="text" placeholder="Search here..." name="key"/>
	<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</form>
</div>
<!--close-top-serch-->

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
	<ul>
		<li><a href="{{ url('/admin/project')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

		<li> <a href="{{ url('/admin/form')}}"><i class="icon icon-th-list"></i> <span>Add New Project</span></a></li>
		<li> <a href="{{ url('/admin/edit-slider')}}"><i class="icon icon-th-list"></i> <span>Edit Slider</span></a></li>
	</ul>
</div>
@yield('noidung')


<!--Footer-part-->
<div class="row-fluid">
	<div id="footer" class="span12">
		<a href="https://ftcjsc.com">
        	<div class="inline-block pull-sm-right"> 2020 &copy; FTCJSC - All Rights Reserved</div>
        </a>
	</div>
</div>
<!--end-Footer-part-->
<script>

	function getValueOption(){
		var sel = document.getElementById('temp-option');
		var value = sel.options[sel.selectedIndex].value;
		if(value == 1)
		{
			document.getElementById('template1').style.display = "block";
			document.getElementById('template2').style.display = "none";
		}
		else if(value == 2){
			document.getElementById('template1').style.display = "none";
			document.getElementById('template2').style.display = "block";
		}
	}
	
</script>
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.uniform.js') }}"></script>
<script src="{{ asset('admin/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/matrix.js') }}"></script>
<script src="{{ asset('admin/js/matrix.tables.js') }}"></script>
</body>
</html>

