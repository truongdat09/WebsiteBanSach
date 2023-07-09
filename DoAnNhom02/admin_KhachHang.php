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
    include("body/Connection.php");
	$sql = "SELECT *FROM khachhang";
    $sta = $pdo->prepare($sql);
    $sta->execute();

    if($sta->rowCount() > 0){
        $sach = $sta->fetchAll(PDO::FETCH_BOTH);		
    }
?>

<style>
	.editfontth th{
		font-size: 15px
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
						<h4 class="page-title">DANH MỤC KHÁCH HÀNG</h4>
						<ul class="breadcrumbs">				
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
						</ul>
					</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="basic-datatables" class="display table table-striped table-hover" >
						<thead>
							<tr class="record ">
								<div class="editfontth">
									<th >Mã khách hàng</th>
									<th>Tên khách hàng</th>
									<th>Địa chỉ</th>
									<th>Số điện thoại</th>
									<th>Email</th>
									<th>Tên đăng nhập</th>		
									<th>Thao tác</th>		
								</div>
										
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($sach as $s){
							?>
							<tr>
								<td><?php echo $s['MAKH']?></td>
								<td><?php echo $s['TENKH']?></td>
								<td><?php echo $s['DIACHI']?></td>
								<td><?php echo $s['SDT']?></td>
								<td><?php echo $s['EMAIL']?></td>						
								<td><?php echo $s['TENDN_KH']?></td>
						
								<td>	
									<div class="form-button-action">
									<!-- <a href="page_update.php?id=<?php echo $key?>" data-original-title="Edit" class="btn btn-link btn-primary"><i class="fa fa-edit"></i></a> -->
									<a href="admin_LSmuacuaKh.php?id=<?php echo $s['MAKH']?>" data-original-title="Delete" class="btn btn-link btn-primary ">Lịch sử đơn hàng</a>		
									</div>
								
								</td>
							</tr>
							<?php }?>
						</tbody>
					</table>
					</div>
				</div>
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