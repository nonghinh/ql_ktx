<header id="header" class="header">
	<div class="large-logo container">
		<img src="{!! url('public/assets/images/logo.png') !!}" alt="ictu.png">
	</div>
	<div id="navbar-top">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
					<a href="#" title="Henry shop" class="navbar-brand">KTX - ICTU</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-main">
					<ul class="nav navbar-nav main">
						<li><a href="" title="">Trang chủ</a></li>
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chuyên mục <span class="caret"></span></a>
				          <ul class="dropdown-menu" id="cates">
				            <li><a href="#">Giới thiệu chung</a></li>
				            <li><a href="#">Hoạt động KTX</a></li>
				            <li><a href="#">Nội quy - quy chế</a></li>
				            <li><a href="#">Đăng ký ở KTX</a></li>
				            <li><a href="#">Hướng dẫn - biểu mẫu</a></li>
				          </ul>
				        </li>
						<li><a href="" title="">Giới thiệu</a></li>
						<li><a href="" title="">Thông báo</a></li>
						<li class="active"><a href="{!! url('lookupStudent') !!}" title="">Tra cứu sinh viên</a></li>
						<li><a href="" title="">Sơ đồ</a></li>
						<li><a href="" title="">Liên hệ</a></li>
					</ul>
					<ul class="nav navbar-right action-right">
						<a href="javascript: void(0)" title="" class=" navbar-btn btn" id="btn-search"><i class="fa fa-search"></i></a>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div id="search-box">
		<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<form action="" method="get" accept-charset="utf-8">
					<div class="form-group">
						<input type="text" name="" value="" class="form-control search" placeholder="Tìm kiếm...">
					</div>
				</form>
			</div>
			<div class="close-search">
				<button type="button" class="btn pull-right btn-close"><i class="fa fa-close fa-lg"></i></button>
			</div>
		</div>
	</div>
</header><!-- /header -->