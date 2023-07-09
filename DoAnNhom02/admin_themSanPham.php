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
	<style>
			.boxes button {
			display: block;
			width: 100%;
			padding: 15px;
			border: none;
			margin-bottom: 5px;
			box-sizing: border-box;
			font-size: 1rem;
			text-align: center;
			text-decoration: none;
			background: gold;
			color: #000;
			}
	</style>
	<?php
		session_start();
		$_SESSION["index"] = 0; 
		use GuzzleHttp\Psr7\Header;	
		error_reporting(0);
		include ("body/Connection.php");
		if(isset($_POST["btn_them"])){
			$masach = null;
			//	$tenCD = $_POST["txt_tenCD"];			
			// $tenNXB = $_POST["txt_tenNXB"];				   
			$tenNXB = $_POST["ma_nxb"];		
			$tenCD = $_POST["ma_cdsach"];
			
			$tenSach = $_POST["txt_tenSach"];
			$giaBan = $_POST["txt_giaBan"];		
			$anhBia = $_FILES["Images"]["errol"] == 0 ? $_FILES["Images"]["name"] : "";
			
			$soLuong = $_POST["txt_soLuong"];
			$moTa = $_POST["txt_moTa"];
			$tacGia = $_POST["txt_tacGia"];
			$giamGia = null;				
			//------------- kiem tra trung ten sach-----------------------			
			$sql_kt = "SELECT * FROM sach where TENSACH = '$tenSach'";
			$sta_kt = $pdo->prepare($sql_kt);
		    $sta_kt->execute();			
			if($sta_kt->rowCount() > 0){
				$_SESSION['status'] = "Thêm thất bại";				
			}			
			else
			{
				$sql = "Insert into sach values(?,?,?,?,?,?,?,?,?,?)";
				$param = array($masach, $tenCD*1+1, $tenNXB*1+1, $tenSach,$giaBan*1, $anhBia, $soLuong*1,$moTa,$tacGia,$giamGia);
				$sta = $pdo->prepare($sql);
				$kq = $sta->execute($param);
				if($kq){
					// $tb = "Them thanh cong";
					$_SESSION['status'] = "Thêm thành công";	
					if($anhBia != ""){
						move_uploaded_file($_FILES["Images"]["tmp_name"],"Images/$anhBia");					
						//var_dump($_FILES["Images"]["tmp_name"]);
						//Header("Location: ShowCustomer.php");
					}			
				}
				else{
					$_SESSION['status'] = "Thêm thất bại";	
				}
			
			}
			
			
			//------------------------------------------------------------		
		
			
		





			
			}		
	?>
<style>
	.editfontth th{
		font-size: 15px
	}
	hr {
	height: 4px;
	margin-left: 15px;
	margin-bottom:-3px;
	}
		.hr-danger{
	background-image: -webkit-linear-gradient(left, rgba(244,67,54,.8), rgba(244,67,54,.6), rgba(0,0,0,0));
	}
	.hr-success{
  background-image: -webkit-linear-gradient(left, rgba(15,157,88,.8), rgba(15, 157, 88,.6), rgba(0,0,0,0));
}
</style>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
            <?php include("body/Logo.php")?>
			<!-- End Logo Header -->
			<!-- Navbar Header -->
		    <?php include("body/NavbarHeader.php")?>
		    <!-- Sidebar -->
            <?php include("body/Sidebar.php")?>
		    <!-- End Sidebar -->

		<div class="main-panel">
		<div class="content">
				<div class="page-inner">
					<!--  -->
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Thêm mới</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#CauHoi_Modal">
											<!-- <i class="bi bi-arrow-90deg-left"></i> -->
											 <a href="admin_SanPham.php" style="color: white">Trở về</a> 
										</button>
									</div>
								</div>
					</div>					
					<?php 
					if(isset($_SESSION['status']))
					{						 
						echo "<h4 id='words' class='alert alert-success'>".$_SESSION['status']."</h4>";
						unset($_SERVER['status']);
					}
					?>
					<script type="text/javascript"> 
								setTimeout(function() {
									var msg=document.getElementById("words")
									msg.parentNode.removeChild(msg)
								},2500)						
					</script>
						
					<!-- form  -->
				    <form enctype="multipart/form-data" method="post" action="admin_themSanPham.php">																				
							<div class="form-row">

								<div class="form-group col-md-3">
									<label for="">Chủ đề sách</label>
									<select name="txt_tenCD" required="required"class="form-control" id="list_chuDe" onchange="getSelectedIndexMaChuDe();">
									<?php 
												include ("body/Connection.php");
												$sql1 = "SELECT tencd FROM chude ";
												$sta1 = $pdo->prepare($sql1);
												$sta1->execute();
												if($sta1->rowCount() > 0){
													$chude = $sta1->fetchAll(PDO::FETCH_BOTH);
												}
												foreach($chude as $cd)
												{
													?>
													<option> <?php echo $cd[0]?></option>
													<?php
												}
										?>
									</select>
									<script>
										function getSelectedIndexMaChuDe()
										{
										
											var a=document.getElementById("list_chuDe");
											var index=a.options[a.selectedIndex].index;
											document.getElementById("temp_list_chuDe").value=index;
											console.log(index);	
																																													
										}																												
									</script>

								</div>

								<div class="form-group col-md-4">
									<label for="">Nhà xuất bản</label>
									<select name="txt_tenNXB" required="required" class="form-control" id="list_nxb"  onchange="getSelectedIndexMaNXB();">
										<?php 
												include ("body/Connection.php");
												$sql = "SELECT tennxb FROM nhaxb ";
												$sta = $pdo->prepare($sql);
												$sta->execute();
												if($sta->rowCount() > 0){
													$nxb = $sta->fetchAll(PDO::FETCH_BOTH);
												}
												foreach($nxb as $a)
												{
													?>
													<option> <?php echo $a[0]?></option>
													<?php
												}
										?>
									</select>
									<script>
										function getSelectedIndexMaNXB()
										{										
											var a=document.getElementById("list_nxb");
											var index=a.options[a.selectedIndex].index;
											document.getElementById("temp_list_nxb").value=index;
											console.log(index);																																														
										}																												
									</script>
								</div>														
								<div class="form-group col-md-3">
									<label for="">Tên sách</label>
									<input type="text" class="form-control" name="txt_tenSach" required="required">
								</div>
								<div class="form-group col-md-2">
									<label for="">Giá bán</label>
									<input type="number" class="form-control" name="txt_giaBan" required="required">
								</div>
							
								<div class="form-group col-md-3	">
									<label for="">Ảnh bìa</label>
									<input type="file" class="form-control" name="Images" required="required">
								</div>
								<div class="form-group col-md-2">
									<label for="">Số lượng</label>
									<input type="number" class="form-control"name="txt_soLuong" required="required">
								</div>
								<div class="form-group col-md-3">
									<label for="">Mô tả</label>
									<input type="text" class="form-control"name="txt_moTa" required="required">
								</div>
								<div class="form-group col-md-3">
									<label for="">Tác giả</label>
									<input type="text" class="form-control"name="txt_tacGia" required="required">
								</div>							
							</div>	
							<div class="form-row">
								
								<div class="form-group col-md-3">
									
										<input  hidden type="text" class="form-control" id="temp_list_chuDe" name="ma_cdsach"  >
								</div>	
								<div class="form-group col-md-3">
									
										<input hidden type="text" class="form-control" id="temp_list_nxb"  name="ma_nxb" >
								</div>	
								
							</div>	
							<!-- <hr class="hr-danger"/>		 -->
							<hr class="hr-success" />
						
							
							<br><br>
							<div>
							<button type="submit"  name="btn_them"class="btn btn-primary">Thêm </button> 						
							</div>
							
					</form>
					
					<!-- end form -->
	




				</div>								
		</div>				
                <!-- lam tu cho nay ne -->
				
       
        </div>


			</div>
			
		</div>
		
		<!-- Custom template | don't include it in your project! -->
        <?php include("body/Customtemplate.php")?>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
    <?php include("body/script.php")?>
   <?php session_destroy()?>
								
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script >		
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});
			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
			$('#addRowButton').click(function() {			
						
			});
		});
	</script> 
</body>
</html>