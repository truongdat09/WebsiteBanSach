<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Trang Đơn Hàng</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = false;
			}
		});
	</script>
    <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="js/Validate.js"></script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
    
 	<?php
		include("Connection.php");
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
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
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
                                <h5>Tên nhân viên</h5>
							</a>
							
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="GiaoDien_Admin_Lan3.php" >
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
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-coins"></i>
								<p>Sản Phẩm</p>
								
							</a>
							
						</li>
                        <li class="nav-item">
							<a data-toggle="collapse" href="#base">
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
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-cart-arrow-down"></i>
								<p>Nhập Hàng</p>
								
							</a>
							
						</li>
                        <li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-file-contract"></i>
								<p>Báo cáo</p>
								
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
            	<div class="page-inner">
                	<div class="page-header">
						<h4 class="page-title">Quản lý nhà sách</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
					</div>
                    
                    <div class="row">
                    	<div class="col-md-5 mx-auto">
							  <?php
                                  include ("Class/xl_NhanVien_CRUD.php");
                                  $model = new NhanVien();
                                  $insert = $model->insert();
								  
                              ?>
                              <form action="" method="post">
                                <div class="form-group">
                                  <label for="">Tên Nhân Viên</label>
                                  <input type="text" name="tennv" class="form-control" required="required" >
                                 
                                </div>
                                <div class="form-group">
                                  <label for="">Giới tính</label>
                                  <input type="text" name="gtinh" class="form-control" required="required" >
                                </div>
                                <div class="form-group">
                                  <label for="">Số điện thoại</label>
                                  <input type="text" name="sdt" class="form-control" required="required" >
                                </div>
                                <div class="form-group">
                                  <label for="">Tên đăng nhập</label>
                                  <input type="text" name="tendn" class="form-control" required="required" >
                                </div>
                                <div class="form-group">
                                  <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                                </div>
                              </form>
        				</div>
                    </div>
                                
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
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
    
    
    <!--<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){
            $(document).ready(function(){

                $(document).on('click', '.delete', function(){
                    var id = $(this).data('id');
					
                    swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
					})
					.then((result) => {
						 if (result.value){
                            $.ajax({
                                url: 'Linh_UD_TrThai_Huy.php',
                                type: 'POST',
                                data: {id:id},
                                dataType: 'json'
                            })
                            .done(function(response){
                                swal.fire('Deleted!', response.message, response.status);
                            })
                            .fail(function(){
                                swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
                            });
                        }
                    })
                });
            });
        });
    });
</script>-->
    
    <script type='text/javascript'>
            $(document).ready(function(){
                $('.chitiet_dh').click(function(){
                    var madh = $(this).data('id');
					$.ajax({
                        url: 'Linh_ChiTietDH_ajax.php',
                        type: 'post',
                        data: {madh: madh},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#donhang').modal('show'); 
                        }
                    });
                    
                });
            });
            </script>
            <script src="jquery-3.3.1.min.js"></script>
  

    <script>
    	$('#btn_huy').on('click', function(){
			Swal.fire({
				type: 'sucess',
				title: 'aaa',
				text: 'texxxt'
				});
			});
    </script>
	<script src="assets/js/demo.js"></script>
		<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
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
			value:70,
			maxValue:100,
			width:7,
			text: 36,
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
			value:40,
			maxValue:100,
			width:7,
			text: 12,
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
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
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

   
    <script>
    	function confirmDelete(self) {
    	var id = self.getAttribute("data-id");
 
    	document.getElementById("form-delete-user").id.value = id;
    	$("#myModal").modal("show");
		}
    </script>
    
   
</div>
                              
</body>
</html>