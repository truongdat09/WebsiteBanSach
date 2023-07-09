<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookShopFake.com</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Boostrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	<!-- Link css -->
	<link rel="stylesheet" href="css/product_details.css">
	<!-- Link javascrit -->
	<link rel="stylesheet" href="js/prpduct_details.js">
	<!--Important link from https://bootsnipp.com/snippets/XqvZr-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>
	.box {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 15pt;
	}

	.custom-button {
		border-color: #8a2be2;
		color: #8a2be2;
	}

	.custom-button:hover {
		background-color: #8a2be2;
		color: #fff;
	}

	/* ================== */
</style>

<body>

	<header class="header">

		<div class="header-1">
			<div class="flex">
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
				<p><a href="DangNhap.php">Đăng nhập</a> | <a href="DangKy.php">Đăng ký</a> </p>
			</div>
		</div>

		<div class="header-2">
			<div class="flex">
				<a href="TrangChu.php" class="logo">BOOK SHOP FAKE</a>

				<nav class="navbar">
					<a href="TrangChu.php">Trang Chủ</a>
					<a href="SanPham.php">Sản Phẩm</a>
					<a href="#">Giới Thiệu</a>
					<a href="#">Liên Hệ</a></a>
					<a href="#">Tin Tức</a>
				</nav>

				<div class="icons">
					<div id="menu-btn" class="fas fa-bars"></div>					
					<div id="user-btn" class="fas fa-user"></div>
					<a href="cart.php" style="position: relative;"><i class="fas fa-shopping-cart"></i><span style="position: absolute;top: -10px; right: -10px; background-color: red; color: white; border-radius: 30%; padding: 3px; font-size: 12px;">
							<?php
							session_start();
							include 'Connection.php';
							$user_id = $_SESSION['user_id'];
							if (!isset($user_id)) {
								header('location:DangNhap.php');
							}
							if (isset($_SESSION['cart'])) {
								$cart = $_SESSION['cart'];
								$totalQuantity = 0;

								// Tính tổng số lượng sản phẩm trong giỏ hàng
								foreach ($cart as $item) {
									$totalQuantity += settype($item['quantity'], 'int');
								}

								echo $totalQuantity;
							} else {
								echo 0;
							}
							?></span></a>
				</div>

				<div class="user-box">
					<p>Tên đăng nhập : <span><?php echo $_SESSION['user_email']; ?></span></p>
					<p>Họ tên : <span><?php echo $_SESSION['user_name']; ?></span></p>
					<a href="DangXuat.php" class="delete-btn">Đăng Xuất</a>
				</div>
			</div>
		</div>

	</header>
	<br><br><br>
	<!-- ======== ct ======== -->
	<?php
	include 'DBConfig.php';
	$database = new DBConfig();

	if (isset($_POST['book_id'])) {
		$bookId = $_POST['book_id'];
		$_SESSION['idsach'] = $bookId;
	}
	$bookId = $_SESSION['idsach'];
	if (isset($_POST['product_id'])) {
		$product_id = $_POST['product_id'];
		$bookId = $product_id;
		echo "vao dc" . $bookId;
	}
	// Truy vấn sách
	$table = "Sach";
	$condition = "MASACH = " . $bookId;
	$result = $database->select($table, $condition);

	// Truy vấn hình
	$table_hinh = "AnhSach";
	$condition = "MASACH = " . $bookId;
	$result1 = $database->select($table_hinh, $condition);
	$Anh_array = array();
	$i = 0;
	if (!empty($result1)) {
		foreach ($result1 as $row) {
			$Anh_array[$i] = $row['TENANH'];
			$i++;
		}
	}
	if (!empty($result)) {
		foreach ($result as $row) {
			$kq = 1;
			$anhbia = $row['ANHBIA'];
			$tensach = $row['TENSACH'] . "<br>";
			$giaban = $row['GIABAN'] . "<br>";
			settype($giaban, "int");
			$gg = $row['GIAMGIA'] . "<br>";
			settype($gg, "float");

			if ($gg != 0 && $gg != null) { // Kiểm tra nếu phần trăm khác 0
				$kq = 1 -  $gg / 100.0; // Thực hiện phép chia và in ra kết quả
			} else {
				$kq = 1;
			}

			$giamgia = $kq * $giaban . "<br>";

			settype($giaban, "int");
			settype($giamgia, "int");

			$anh = $row['ANHBIA'] . "<br>";
			$sl = $row['SLTON'] . "<br>";
			$mota = $row['MOTA'] . "<br>";
			$tacgia = $row['TACGIA'] . "<br>";
		}
	}
	?>


	<div class="container">
		<div class="heading-section">
			<h1 style="color:#8e44ad; font-family: 'Roboto', sans-serif; font-weight: bold;">Thông tin sản phẩm</h1>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">

				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner" style="height:500px; width: auto;">
						<div style="width: 100%; height: auto;" class="carousel-item active">
							<img style="object-fit: cover; width: 100%; height: 500px; 	object-fit: contain;" src="Images/<?php echo $anhbia; ?>" alt="">
						</div>
						<div style="max-width: 100%; max-height: 400px;" class="carousel-item">
							<img style="object-fit: contain; width: 100%; height: 500px; object-fit: contain;" src="Images_child/<?php echo $Anh_array[0]; ?>" class="d-block w-100" alt="">
						</div>
						<div style="max-width: 100%; max-height: 400px; overflow: hidden; transition: transform.0.5s; transform:scale(1.5);" class="carousel-item">
							<img style="object-fit: cover; width: 100%; height: 500px; object-fit: contain;" src="Images_child/<?php echo $Anh_array[1]; ?>" class="d-block w-100" alt="">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-dtl">
					<div class="product-info">
						<div class="product-name" style="font-family: 'Roboto', sans-serif;"><?php echo $tensach ?></div>
						<div class="reviews-counter">
							<div class="rate">
								<input type="radio" id="star5" name="rate" value="5" checked />
								<label for="star5" title="text">5 stars</label>
								<input type="radio" id="star4" name="rate" value="4" checked />
								<label for="star4" title="text">4 stars</label>
								<input type="radio" id="star3" name="rate" value="3" checked />
								<label for="star3" title="text">3 stars</label>
								<input type="radio" id="star2" name="rate" value="2" />
								<label for="star2" title="text">2 stars</label>
								<input type="radio" id="star1" name="rate" value="1" />
								<label for="star1" title="text">1 star</label>
							</div>
							<span>0 Reviews</span>
						</div>
						<div class="product-price-discount"><span><?php $formattedAmount = number_format($giamgia, 0, ',', '.') . ' VND';
																	echo $formattedAmount ?></span><span class="line-through"><?php echo $formattedAmount1 = number_format($giaban, 0, ',', '.') . ' VND'; ?></span></div>
					</div>
					<p><?php echo $mota ?></p>


					<div class="product-count">
						<label for="size"><?php echo "Số lượng sản phẩm: " . $sl ?></label> <br>
						<!-- <form action="#" class="display-flex">
								<div class="qtyminus" style="background-color:#8e44ad">-</div>
							    <input type="text" name="quantity1" value="1" min="1" class="qty">
							    <div class="qtyplus" style="background-color:#8e44ad">+</div>
							</form>  -->

						<!-- <a href="#" class="round-black-btn">Thêm vào giỏ hàng</a> 
							<a style="margin-left: 20px;" href="#" class="round-black-btn">Mua ngay</a> -->
						<br>
						<br>
						<br>
						<form style="display: inline;" action="add_to_cart.php" method="POST">
							<input type="hidden" name="product_id" value="<?php echo $bookId ?>">
							<input type="hidden" name="product_name" value="<?php echo $tensach ?>">
							<input type="hidden" name="product_price" value="<?php echo $giaban ?>">
							<input type="hidden" name="image_name" value="<?php echo $anhbia ?>">

							<div class="qtyminus" style="display: inline; width: 50px;">-</div>
							<input type="text" name="quantity" value="1" min="1" class="qty">
							<div class="qtyplus" style="display: inline; width: 50px;">+</div> <br>
							<br>
							<button type="submit" style="height: 30px; width: 150px; display: inline;" class="btn btn-outline-info">Thêm vào giỏ hàng</button>
						</form>

						<form action="add_to_cart2.php" style="display: inline; margin-left: 20px; height: 40px; width: 100px;" method="POST">
							<input type="hidden" name="product_id" value="<?php echo $bookId ?>">
							<input type="hidden" name="product_name" value="<?php echo $tensach ?>">
							<input type="hidden" name="product_price" value="<?php echo $giaban ?>">
							<input type="hidden" name="image_name" value="<?php echo $anhbia ?>">

							<input type="hidden" name="quantity" value="1" min="1">
							<button type="submit" style="height: 30px; width: 150px;" class="btn btn-outline-info">Mua luôn</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="product-info-tabs">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
						<h3 style="font-weight: 300; font-family: 'Roboto', sans-serif;">Mô tả sản phẩm</h3>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">
						<h3 style="font-weight: 300; font-family: 'Roboto', sans-serif;">Đánh giá sản phẩm</h3>
					</a>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
					<p><?php echo $mota ?></p> <br>

				</div>

				<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="review-heading">Đánh giá</div>
					<p class="mb-20">Hiện chưa có đánh giá nào bạn hãy là người đánh giá đầu tiên
					<div></div>
					</p>
					<form class="review-form">
						<div class="form-group">
							<label>Nhận xét</label>
							<div class="reviews-counter">
								<div class="rate">
									<input type="radio" id="star5" name="rate" value="5" />
									<label for="star5" title="text">5 Sao</label>
									<input type="radio" id="star4" name="rate" value="4" />
									<label for="star4" title="text">4 Sao</label>
									<input type="radio" id="star3" name="rate" value="3" />
									<label for="star3" title="text">3 Sao</label>
									<input type="radio" id="star2" name="rate" value="2" />
									<label for="star2" title="text">2 Sao</label>
									<input type="radio" id="star1" name="rate" value="1" />
									<label for="star1" title="text">1 Sao</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tin của bạn</label>
							<textarea class="form-control" rows="10"></textarea>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="Tên (*)">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="Email(*)*">
								</div>
							</div>
						</div>
						<button class="round-black-btn">Gửi đánh giá</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>


	<!-- ======== ct ======== -->
	<br><br>



	<section class="footer">
		<div class="box-container">
			<div class="box">
				<h3>Chính sách hỗ trợ</h3>
				<a href="home.php">Chính sách đổi trả - hoàn tiền</a>
				<a href="#">Chính sách bảo hành</a>
				<a href="#">Chính sách vận chuyển</a>
				<a href="#">Phương thức thanh toán và xuất hóa đơn</a>
			</div>
			<div class="box">
				<h3>Dịch vụ</h3>
				<a href="">Giới thiệu công ty</a>
				<a href="">Tuyển dụng</a>
				<a href="">Chương trình đại lý</a>
				<a href="">Góc báo chí</a>
			</div>
			<div class="box">
				<h3>Thông tin liên hệ</h3>
				<p> <i class="fas fa-phone"></i> +123-456-7890 </p>
				<p> <i class="fas fa-phone"></i> +111-222-3333 </p>
				<p> <i class="fas fa-envelope"></i> shopgiayfake@gmail.com </p>
				<p> <i class="fas fa-map-marker-alt"></i> 140 Lê Trọng Tấn, Quận Tân Phú, TPHCM</p>
			</div>
			<div class="box">
				<h3>Liên hệ với chúng tôi</h3>
				<a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
				<a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
				<a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
				<a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
			</div>
		</div>
	</section>

	<!-- sukien undo -->
	<?php

	// Lưu trạng thái trang trước đó
	$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];

	// Kiểm tra nếu trang hiện tại khác với trang trước đó
	if (isset($_SESSION['previous_url']) && $_SESSION['previous_url'] !== $_SERVER['REQUEST_URI']) {
		// Trang được tải lại từ trạng thái lưu trữ (undo)
		// Thực hiện xử lý tại đây
		echo "Trang được tải lại từ trạng thái lưu trữ (undo).";
	}

	// Cập nhật trạng thái trang hiện tại
	$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
	?>
	<!-- custom js file link  -->
	<script src="js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>