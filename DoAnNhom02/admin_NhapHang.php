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
    set_error_handler(function(int $errno, string $errstr) {
	if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
		return false;
	} else {
		return true;
	}
  }, E_WARNING);
?>
	<?php
	
	session_start();
    include("body/Connection.php");
	$sql = "SELECT *FROM sach";
    $sta = $pdo->prepare($sql);
    $sta->execute();

    if($sta->rowCount() > 0){
        $sach = $sta->fetchAll(PDO::FETCH_BOTH);		
    }

	$mapn = null;	
	$mapn=$_GET['mapn'];								
	
	
	
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
						<div class="page-header">
						<h4 class="page-title">ĐƠN NHẬP HÀNG</h4>			
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
							<form method="post" action="code_NhapHang.php" >																
								<div class="form-row">
									<div class="form-group col-md-1">
										<label for="inputCity">Mã phiếu nhập</label>										
										<input type="text" readonly name="txt_mapn" class="form-control" value="<?php echo $mapn?>">
									</div>	
									<div class="form-group col-md-3">
										<label for="inputCity">Ngày nhập</label>
											<?php 
											$currentDate = date('Y-m-d');								
											?>
										<input readonly  type="text" name="txt_ngay" class="form-control" id="inputCity" value="<?php echo $currentDate ?>">
									</div>
									<div class="form-group col-md-3">
										<label for="">Sản phẩm</label>
												<select required="required"class="form-control" id="list_ncc" onchange="getSelectedIndexMaNCC();">
												<?php 
														include ("body/Connection.php");
														$sql1 = "SELECT TENNCC FROM nhacungcap";
														$sta1 = $pdo->prepare($sql1);
														$sta1->execute();
														if($sta1->rowCount() > 0){
															$nhacc = $sta1->fetchAll(PDO::FETCH_BOTH);
														}
														foreach($nhacc as $cd)
														{
															?>
															<option> <?php echo $cd[0]?></option>
															<?php
														}
													?>
												</select>
												<script>
													function getSelectedIndexMaNCC()
													{													
														var a=document.getElementById("list_ncc");
														var index=a.options[a.selectedIndex].index;
														document.getElementById("temp_list_nxb").value=index;
														console.log(index);																																																	
													}																												
												</script>
									</div>								
									<div class="form-group col-md-1">
											
											<input required hidden type="text" class="form-control" id="temp_list_nxb"  name="mancc" >
									</div>	
									<div class="form-group col-md-1" style="margin-top: 30px;">								
										<button type="submit" name="btn_lapPhieuNH" class="btn btn-primary">Tạo phiếu nhập hàng</button> 
									</div>							
								</div>	
								</form>							
									<hr class="hr-success" />
									<br>
								<form method="post" action="code_NhapHang.php" >	
									<div class="form-row">
									<div class="form-group col-md-4">
										<label for="">Sản phẩm</label>
												<select required="required"class="form-control" id="list_tensach" onchange="getSelectedIndexMaSach();">
												<?php 
														include ("body/Connection.php");
														$sql1 = "SELECT TENSACH FROM sach";
														$sta1 = $pdo->prepare($sql1);
														$sta1->execute();
														if($sta1->rowCount() > 0){
															$sach = $sta1->fetchAll(PDO::FETCH_BOTH);
														}
														foreach($sach as $cd)
														{
															?>
															<option> <?php echo $cd[0]?></option>
															<?php
														}
													?>
												</select>
												<script>
													function getSelectedIndexMaSach()
													{													
														var a=document.getElementById("list_tensach");
														var index=a.options[a.selectedIndex].index;
														document.getElementById("temp_list_sach").value=index+1;
														console.log(index);																																																	
													}																												
												</script>
									</div>						
										<div class="form-group col-md-2">
											<label for="">Giá bán</label>
											<input required type="number" class="form-control" name="txt_giaban">
										</div>
										<div class="form-group col-md-2">
											<label for="">Số lượng</label>
											<input required name="txt_soluong" type="number" class="form-control" >
										</div>
										<div class="form-group col-md-1">
											<label for="">Mã sách</label>
											<input   required type="text" class="form-control" id="temp_list_sach" name="masach"  >
										</div>	
										<div class="form-group col-md-1" style="margin-top: 30px;">
											<button type="submit" name="btn_them" class="btn btn-primary">Thêm</button> 
										</div>
									
									</div>
										<table class="table" >
											<thead>
												<tr>																		
													<th>Mã sách</th>
													<th>Tên sách</th>
													<th>Số lượng</th>
													<th>Giá nhập</th>
													<th>Thành tiền</th>																									
													<th>Thao tác</th>	
												</tr>
											</thead>	
											<?php
											include("body/Connection.php");		
											if($_GET['mapn']!="")	
											{
												$sql = "SELECT sach.MASACH,sach.TENSACH,SOLUONG,GIANHAP,TONGTIEN FROM sach_phieunhap,sach where sach_phieunhap.MASACH=sach.MASACH AND MAPN=".$mapn;
												$sta = $pdo->prepare($sql);
												$sta->execute();
												$chitietphieunhap = null;
												if($sta->rowCount() > 0){
													$chitietphieunhap = $sta->fetchAll(PDO::FETCH_BOTH);
												}
												if($chitietphieunhap!=null)
												{
													foreach ($chitietphieunhap as $pn) {
														?>						
														<tr>
															<td><?php echo $pn[0] ?></td>
															<td><?php echo $pn[1] ?></td>															
															<td><?php echo $pn[2] ?></td>
															<td><?php echo $pn[3] ?></td>
															<td><?php echo $pn[4] ?></td>		
															<td><a href="code_NhapHang.php?id=<?php echo $pn[0]?>" data-original-title="Delete" class="btn btn-link btn-danger "><i class="fa fa-times"></i></i></a>		</td>						
														</tr>
														<?php
													}
												}
											}								
											
											
												?>							
										</table>																																			
							</form>
							<form action="InPN.php?mapn=<?php echo $mapn?>" method="post">
								<div class="form-group col-md-1" style="margin-top: 30px; text-align: center; margin-left:600px">
									<button type="submit" name="btn_inhoadon" class="btn btn-danger">In hóa đơn</button> 
								</div>
							</form>

							<!-- end form -->	
						</div>		
																		
				</div>						
			</div>						
		</div>			
	</div>
		
		<!-- Custom template | don't include it in your project! -->
        <?php include("body/Customtemplate.php")?>
    	<?php include("body/script.php")?>	
	
		<?php session_destroy() ?>
</body>
</html>