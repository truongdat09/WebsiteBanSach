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
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
    .box{
        font-family: Arial, Helvetica, sans-serif; 
        font-size: 15pt;
    }
</style>
<?php
    session_start();
    include 'Connection.php';
    $user_id = $_SESSION['user_id'];
    if(!isset($user_id)){
    header('location:DangNhap.php');}
    
    $tongTien = 0;
    $_SESSION['thucThi'] = 0;
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        foreach ($cart as $item) {
            $product_id = $item['id'];
            $product_name = $item['name'];
            $product_price = $item['price'];
            $quantity = $item['quantity'];
            $image_name = $item['image_name'];
        }
    } else {
        // echo "Giỏ hàng trống.";
    }
?>
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

         <nav class="navbar" style="margin-top: 35px;">
            <a href="TrangChu.php">Trang Chủ</a>
            <a href="SanPham.php">Sản Phẩm</a>
            <a href="#">Giới Thiệu</a>
            <a href="#">Liên Hệ</a></a>
            <a href="#">Tin Tức</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>         
            
            <div id="user-btn" class="fas fa-user"></div>            
            <a href="cart.php" style="position: relative;"><i class="fas fa-shopping-cart"></i><span style="position: absolute;top: -10px; right: -10px; background-color: red; color: white; border-radius: 40%; padding: 4px; font-size: 12px;">
			<?php
				if (isset($_SESSION['cart'])) {
					$cart = $_SESSION['cart'];
					$totalQuantity = 0;
				
					// Tính tổng số lượng sản phẩm trong giỏ hàng
					foreach ($cart as $item) {
						$totalQuantity += settype($item['quantity'],'int');
					}
					echo $totalQuantity;
				} else {
					echo 0;
				}
			?></span></a>
         </div>

         <div class="user-box">
            <p>Tên đăng nhập : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <p>Họ tên : <span><?php echo $_SESSION['user_name'];?></span></p>            
            <a href="DangXuat.php" class="delete-btn">Đăng Xuất</a>
         </div>
      </div>
   </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
        <?php 
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><h2>SẢN PHẨM</h2></th>
                        <th>Số lượng</th>
                        <th class="text-center">Đơn giá</th>
                        <th class="text-center">Tổng</th>
                        <th style="margin-left: 20px;"> 
                            <form action="clear_cart.php" method="POST">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> Xóa tất cả
                                </button>
                            </form>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                     if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
                        $tt = 0;
                        foreach($cart as $item)
                        {
                            $product_id = $item['id'];
                            $product_name = $item['name'];
                            $product_price = $item['price'];
                            $quantity = $item['quantity'];
                            $image_name = $item['image_name'];
                            settype($quantity,'int');
                            settype($product_price,'int');
                            $tt += ($quantity*$product_price);
                            $tongTien = number_format($tt, 0, ',', '.') . ' VND';

                            echo '<tr style="height: 160px;">
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" style="height: 150px; width: 150px" href="#"> <img class="media-object" src="Images/'.$image_name.'" style="max-width: 100%; height: auto;  object-fit: contain;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">'. $product_name .'</a></h4>
                                        <h5 class="media-heading"> by <a href="#">Nhà xuất bản thế giới </a></h5>
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="number" class="form-control" id="exampleInputEmail1" value="'.$quantity.'" min="1" onchange="updateTotal(this)">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>'. $product_price .'</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong id="total_'.$product_id.'">'. $quantity*$product_price .'</strong></td>

                            <td class="col-sm-1 col-md-1">
                            <form action="remove_from_cart.php" method="POST">
                                <input type="hidden" name="product_id" value="'.$product_id.'">
                                <button type="submit" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> Xóa
                                </button>
                            </form>
                        </td>

                        </tr>';
                        }
                        echo 
                        '
                        <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Tổng phụ</h5></td>
                        <td class="text-right"><h5><strong>0</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Tiền giao hàng</h5></td>
                        <td class="text-right"><h5><strong>40.000 VNĐ</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td ><h3>Tổng tiền</h3></td>
                        <td class="text-right"><h3 style="color: red;"><strong>'.$tongTien.'</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span><a style="color:black;" href="SanPham.php"> Tiếp tục mua</a>
                            </button>
                        </td>
                        <td>
                            <form action="Checkout.php" method="POST">
                                <button type="submit" class="btn btn-success" style="background-color: #8e44ad;">
                                    <input type="hidden" name="tongTien" value="'.$tt.'">
                                    Thanh Toán <span class="glyphicon glyphicon-play"></span>
                                </button>
                            </form>
                        </td>
                    </tr>';
                     }
                     else
                     {
                        echo '<tr><td colspan = "4" style="color: red;"> Không có sản phẩm nào trong giỏ hàng</td></tr>';
                     }
                    ?>
                    <!--cho dau ngoac-->
                </tbody>
            </table>
        </div>
    </div>
</div>





<section class="home-contact">

   <div class="content">
      <h3>Đăng ký nhận thông tin sách mới</h3>
      <div class="input-group">   
          <button type="submit" class="btn newsletter-button">Đăng ký ngay</button> 
      </div>
   </div> 
</section>

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

<!-- custom js file link  -->
</body>
<!-- Update số lượng -->
<script>
    function updateTotal(input) {
        var quantity = input.value;
        var productPrice = <?php echo $product_price; ?>;
        var totalElement = document.getElementById('total_<?php echo $product_id; ?>');
        var total = quantity * productPrice;
        totalElement.innerHTML = total;
        <?php
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                foreach ($cart as &$item) {
                    if($product_id == $item['id'])
                    {
                        $item['quantity'] = $quantity;
                    }
                }
                unset($item); // Hủy tham chiếu cuối cùng để tránh gây lỗi
                $_SESSION['cart'] = $cart; // Lưu lại mảng đã cập nhật vào SESSION
            }
        ?>
    }
</script>
</html>