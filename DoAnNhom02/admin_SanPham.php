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
    include("body/Connection.php");
	$sql = "SELECT * FROM sach";
    $sta = $pdo->prepare($sql);
    $sta->execute();

    if($sta->rowCount() > 0){
        $sach = $sta->fetchAll(PDO::FETCH_BOTH);		
    }
	session_start();
?>
<style>
	.editfontth th{
		font-size: 15px
	}
</style>

</head>
<body>
	<!-- Modal delete san pham-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
						<h4 class="page-title">DANH MỤC CÂU HỎI</h4>
						<ul class="breadcrumbs">				
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
						</ul>
					</div>
<!--  -->
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Thêm mới</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#CauHoi_Modal">
											<i class="fa fa-plus"></i>
											 <a href="admin_themSanPham.php" style="color: white">Thêm mới</a> 
										</button>
										<form action="exportExcel.php" method="post"> 
											<button name="btn_export"class="btn btn-warning link btn-round ml-auto" >											
												Export Excel
											</button>
										</form>
									</div>
								</div>
					</div>					
						<!-- Thong bao -->
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

				<div class="card-body">
					<div class="table-responsive">
						<table id="basic-datatables" class="display  table-striped table-hover" >
						<thead>
							<tr class="record">
								<div class="editfontth">
								<th>Mã sách </th>
								<th>Mã Chủ đề</th>
								<th>Mã NXB</th>
								<th>Tên sách</th>
								<th>Giá bán</th>
								<th>Ảnh bìa</th>
								<th>SL tồn</th>
								<th>Mô tả</th>
								<th>Tác giả</th>
								<th>Giảm giá</th>
								<th>Thao tác</th>
								</div>
							
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($sach as $s){
							?>
							<tr>
								<td><?php echo $s['MASACH']?></td>
								<td><?php echo $s['MACD']?></td>
								<td><?php echo $s['MANXB']?></td>
								<td><?php echo $s['TENSACH']?></td>
								<td><?php echo $s['GIABAN']?></td>
								<td style="text-align: center;"><img src="Images/<?php echo $s['ANHBIA'];?>" width="30px"/></td>
								<td><?php echo $s['SLTON']?></td>
								<td><?php echo $s['MOTA']?></td>
								<td><?php echo $s['TACGIA']?></td>
								<td><?php echo $s['GIAMGIA']?></td>
								
								<td>	
									<div class="form-button-action">
										<a href="admin_suaSanPham.php?id=<?php echo $s['MASACH']?>" data-original-title="Edit" class="btn btn-link btn-primary"><i class="fa fa-edit"></i></a>								
									    <a href="admin_XoaSanPham.php?id=<?php echo $s['MASACH']?>" data-original-title="Delete" class="btn btn-link btn-danger "><i class="fa fa-times"></i></i></a>		
									</div>
									<!-- <a href="#" data-original-title="Delete" class="delete_btn"><i class="fa fa-times"></i></i></a>		 -->
									
								
								</td>
							</tr>
							<?php 
						
						
							
						}?>
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
	<script>
		$(document).ready(function ()
		{
			$('.delete_btn').click(function(e)
			{
				e.preventDefault();	
				var stu_id =$(this).closest('tr').find('.stu_id').text();
				// console.log(stu_id);		
				$('#exampleModal').modal.show();
			});
		});
	</script>

</body>
</html>