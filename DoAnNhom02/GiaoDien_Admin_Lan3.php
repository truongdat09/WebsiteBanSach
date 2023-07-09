<?php
include 'Connection.php';
session_start();
$user_id_nv = $_SESSION['user_id_nv'];
if(!isset($user_id_nv)){
   header('location:DangNhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Giao Diện Admin Lần 3</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
    
    <?php
		include ("Connection.php");
		$sql_sach = "select count(*) as slsach from sach;";
		$sta = $pdo->prepare($sql_sach);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$sach = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_dh = "select count(*) as sldonhang from donhang;";
		$sta = $pdo->prepare($sql_dh);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$dhang = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_nh = "select count(*) as slnhaphang from phieunhap;";
		$sta = $pdo->prepare($sql_nh);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$nhang = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_tong = "select sum(TONGTIEN) as TONG from donhang;";
		$sta = $pdo->prepare($sql_tong);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$tongtien = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_sachmoi = "select * from sach LIMIT 5;";
		$sta = $pdo->prepare($sql_sachmoi);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$sachmoi = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_kh = "select * from khachhang;";
		$sta = $pdo->prepare($sql_kh);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$khachhang = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_tt = "select count(*) AS New from donhang WHERE TRANGTHAI = 0;";
		$sta = $pdo->prepare($sql_tt);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$new_dh = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		$sql_tt_dh = "select * from donhang, khachhang WHERE TRANGTHAI = 0 and donhang.MAKH = khachhang.MAKH;";
		$sta = $pdo->prepare($sql_tt_dh);
		$sta->execute();
		if ($sta->rowCount() > 0)
		{
			$new_tt_dh = $sta->fetchAll(PDO::FETCH_BOTH);	
		}
		
		
		
		
	 ?>
    
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img src="assets/img/logo_bookstore.png" width="150px" style="border-radius:30%;" height="100%" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Tìm kiếm ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								
                                	<?php foreach($new_dh as $new){ ?>
                                    <span class="notification"><?php echo $new['New'] ?>
                                    </span>
                                    <?php }?>
                                
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
                                	<?php foreach($new_dh as $new){ ?>
									<div class="dropdown-title">Bạn có <?php echo $new['New'] ?> đơn hàng mới</div>
                                    <?php }?>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											
												
                                                <?php foreach($new_tt_dh as $dh){  ?>
                                                <a href="Linh_DonHang.php">
                                                	<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
													<div class="notif-content">
                                                	<span class="block">
														<?php echo $dh['TENKH'] ?>
													</span>
													<span class="time"><?php echo $dh['NGAYDAT'] ?></span> 
                                                    </div>
                                                    </a>
                                                <?php }?>
													
												
											
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/account.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/account.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $_SESSION['user_email_nv']; ?></h4>
												<p class="text-muted"><?php echo $_SESSION['user_name_nv'];?></p><a href="GiaoDien_Admin_Lan3.php" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/account.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Tài khoản
								</span>
                                <h5><?php echo $_SESSION['user_name_nv']; ?></h5>
							</a>
							
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="GiaoDien_Admin_Lan3.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Trang chủ</p>
								
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Danh mục quản lý</h4>
						</li>
						<li class="nav-item">
							<a href="admin_SanPham.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-coins"></i>
								<p>Sản Phẩm</p>
								
							</a>
							
						</li>
                        <li class="nav-item">
							<a href="admin_KhachHang.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-people-carry"></i>
								<p>Khách Hàng</p>
							
							</a>
							
						</li>
                        <li class="nav-item">
							<a href="Linh_DonHang.php">
								<i class="fas fa-cart-plus"></i>
								<p>Đơn Hàng</p>
							</a>
							
						</li>
                        <li class="nav-item">
							<a href="admin_NhapHang.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-cart-arrow-down"></i>
								<p>Nhập Hàng</p>
								
							</a>
							
						</li>
                        
                        <li class="nav-item">
							<a href="admin_dsDonHangNhap.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-cart-arrow-down"></i>
								<p>Danh sách đơn nhập</p>
								
							</a>
							
						</li>
                        
                        <li class="nav-item">
							<a href="Linh_NhanVien.php">
								<i class="fas fa-user"></i>
								<p>Nhân viên</p>
								
							</a>
							
						</li>
                        <li class="nav-item">
							<a href="Linh_ThongKe.php">
								<i class="fas fa-chart-bar"></i>
								<p>Thống Kê</p>
								
							</a>
							
						</li>
						
						<li class="mx-4 mt-2">
							<a href="TrangChu.php" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fas fa-hand-point-left"></i> </span>Trang chính</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Quản Lý Nhà Sách</h2>
								
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Thống kê số liệu</div>
									
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Sản phẩm</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Đơn hàng</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Nhập hàng</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Thống kê tổng thu nhập</div>
									<div class="row py-3">
										<div class="col-md-4 d-flex flex-column justify-content-around">
											<div>
												<h6 class="fw-bold text-uppercase text-success op-8">Tổng thu nhập</h6>
												<h3 class="fw-bold"><?php
													foreach ($tongtien as $dh)
														{
															echo '$'.$dh['TONG'];
																
														}
												
												 ?></h3>
											</div>
											
										</div>
										<div class="col-md-8">
											<div id="chart-container">
												<canvas id="totalIncomeChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Sản Phẩm Bán Chạy</div>
								</div>
								<div class="card-body pb-0">
                                	<?php
										foreach($sachmoi as $sh)
										{
									 ?>
                                     	<div class="d-flex">
                                            <div class="avatar" style="width:50px; height:70px;">
                                                <img src="Images/<?php echo $sh['ANHBIA'] ?>" alt="..." class="avatar-img" >
                                            </div>
                                            <div class="flex-1 pt-1 ml-2">
                                                <h6 class="fw-bold mb-1"><?php echo $sh['TENSACH'] ?></h6>
                                                <small class="text-muted"><?php echo $sh['TACGIA'] ?></small>
                                            </div>
                                            <div class="d-flex ml-auto align-items-center">
                                                <h3 class="text-info fw-bold"><?php echo '$'.$sh['GIABAN'] ?></h3>
                                            </div>
										</div>
									<div class="separator-dashed"></div>
                                     	
                                     <?php }?>
									
								
									<div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Khách Hàng Thân Thiết</div>
									<div class="card-list">
                                    	<?php foreach($khachhang as $kh){ ?>
                                        <div class="item-list">
											<div class="avatar">
												<img src="assets/img/account.png" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username"><?php echo $kh['TENKH'] ?></div>
												<div class="status"><?php echo $kh['EMAIL'] ?></div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
                                        <?php }?>
										

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary bg-primary-gradient" style="height:500px;">
								<div class="card-body">
									<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold"></h4>
									<h1 class="mb-4 fw-bold"></h1>
									<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold"></h4>
									<div id="activeUsersChart"><canvas width="294" height="100" style="display: inline-block; width: 294px; height: 100px; vertical-align: top;"></canvas></div>
									
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script>
	<script src="assets/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:90,
			maxValue:100,
			width:7,
			text: <?php 
				foreach ($sach as $dh)
				{
					echo $dh['slsach'];
						
				}
			
			 ?>,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: <?php 
				foreach ($dhang as $dh)
				{
					echo $dh['sldonhang'];
						
				}
			
			 ?>,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:50,
			maxValue:100,
			width:7,
			text: <?php 
				foreach ($nhang as $dh)
				{
					echo $dh['slnhaphang'];
						
				}
			
			 ?>,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["", "", "", "", "", "", "", "", "", ""],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>