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
   <link rel="stylesheet" href="css/checkout_style.css">

   <!-- Boostrap  -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
	.box{
		font-family:Arial, Helvetica, sans-serif;
		font-size: 15pt;
        
	}
    .scroll-view {
        width: 100%; /* Độ rộng của scroll view */
        height: 350px; /* Chiều cao của scroll view */
        overflow-x: hidden; /* Ẩn thanh cuộn ngang */
        overflow-y: auto;
    }

    .scroll-view table {
        width: 100%; /* Đảm bảo bảng điền hết kích thước của scroll view */
    }
    /* css của alert */
</style>

<?php
    session_start();
    include 'Connection.php';
    $user_id = $_SESSION['user_id'];
    if(!isset($user_id)){
    header('location:DangNhap.php');}

    $_SESSION['thucThi'] == 0;
    $tongtien = 0;
    if (isset($_POST['tongTien']))
    {
        if (isset($_SESSION['cart'])) 
        {
            $tongtien = $_POST['tongTien'];
            $cart = $_SESSION['cart'];
            foreach ($cart as $item) {
                $product_id = $item['id'];
                $product_name = $item['name'];
                $product_price = $item['price'];
                $quantity = $item['quantity'];
                $image_name = $item['image_name'];
    
            }
        } else 
        {
            echo "Giỏ hàng trống.";
        }

    }
?>
<?php
// Kiểm tra khi người dùng bấm vào button
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Lấy giá trị của trường email và input khác (nếu có)
//     $fname = $_POST["fname"];
//     $lname = $_POST["lname"];
//     $cn = $_POST["cn"];
//     $selection = $_POST["selection"];
//     $houseadd = $_POST["houseadd"];
//     $city = $_POST["city"];
//     $phone = $_POST["phone"];
//     $email = $_POST["email"];
//     // Lấy giá trị các trường input khác (nếu có)

//     // Kiểm tra email và input không rỗng
//     if (empty($fname) || empty($lname) || empty($selection) || empty($houseadd) || empty($city) || empty($phone) || empty($email)) {
//         echo "<script>alert('Vui lòng nhập địa chỉ email.');</script>";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<script>alert('Địa chỉ email không đúng định dạng.');</script>";
//     } else {
//         header("Location: order_confirm.php");
//         exit();
//     }
// }
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
            </a>
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
<br><br><br>
<!-- Thực thi thông báo -->
<?php
    if($_SESSION['thucThi'] == 1)
    {
        echo '<div class="alert alert-success">
                <strong>Success!</strong> Mua hàng thành công vui lòng chờ email xác nhận từ nhân viên.
                </div>';
            $_SESSION['thucThi'] = 0;
    }
?>
<div class="container1">
    <div class="title1">
        <h1 style="font-weight: bold;">Thanh Toán</h1>
    </div>
    <br>
<div>
    <div class="d-flex1" style="height: 900px">
        <form action="" method="">
            <label class="labeltable">
                <span class="fname1">Tên <span class="required1">*</span></span>
                <input type="text" name="fname" placeholder="Nhập tên và chữ lót người nhận">
            </label>
            <label class="labeltable">
                <span class="lname1">Họ <span class="required1">*</span></span>
                <input type="text" name="lname" placeholder="Nhập họ người nhận">
            </label>
            <label class="labeltable">
                <span>Công ty</span>
                <input type="text" name="cn" placeholder="Nhập tên nơi làm việc (nếu có)">
            </label>
            <label class="labeltable">
                <span>Thành phố/ Tỉnh <span class="required1">*</span>
            </label>
            <label class="labeltable">
                <select name="selection" class="selectt">
                    <option value="select">Chọn tỉnh thành ...</option>
                    <option value="1">An Giang</option>
                    <option value="2">Bà Rịa - Vũng Tàu</option>
                    <option value="3">Bạc Liêu</option>
                    <option value="4">Bắc Giang</option>
                    <option value="5">Bắc Ninh</option>
                    <option value="6">Bến Tre</option>
                    <option value="7">Bình Định</option>
                    <option value="8">Bình Dương</option>
                    <option value="9">Bình Phước</option>
                    <option value="10">Bình Thuận</option>
                    <option value="11">Cà Mau</option>
                    <option value="12">Cần Thơ</option>
                    <option value="13">Cao Bằng</option>
                    <option value="14">Đà Nẵng</option>
                    <option value="15">Đắk Lắk</option>
                    <option value="16">Đắk Nông</option>
                    <option value="17">Điện Biên</option>
                    <option value="18">Đồng Nai</option>
                    <option value="19">Đồng Tháp</option>
                    <option value="20">Gia Lai</option>
                    <option value="21">Hà Giang</option>
                    <option value="22">Hà Nam</option>
                    <option value="23">Hà Nội</option>
                    <option value="24">Hà Tĩnh</option>
                    <option value="25">Hải Dương</option>
                    <option value="26">Hải Phòng</option>
                    <option value="27">Hậu Giang</option>
                    <option value="28">Hoà Bình</option>
                    <option value="29">Hưng Yên</option>
                    <option value="30">Khánh Hòa</option>
                    <option value="31">Kiên Giang</option>
                    <option value="32">Kon Tum</option>
                    <option value="33">Lai Châu</option>
                    <option value="34">Lâm Đồng</option>
                    <option value="35">Lạng Sơn</option>
                    <option value="36">Lào Cai</option>
                    <option value="37">Long An</option>
                    <option value="38">Nam Định</option>
                    <option value="39">Nghệ An</option>
                    <option value="40">Ninh Bình</option>
                    <option value="41">Ninh Thuận</option>
                    <option value="42">Phú Thọ</option>
                    <option value="43">Phú Yên</option>
                    <option value="44">Quảng Bình</option>
                    <option value="45">Quảng Nam</option>
                    <option value="46">Quảng Ngãi</option>
                    <option value="47">Quảng Ninh</option>
                    <option value="48">Quảng Trị</option>
                    <option value="49">Sóc Trăng</option>
                    <option value="50">Sơn La</option>
                    <option value="51">Tây Ninh</option>
                    <option value="52">Thái Bình</option>
                    <option value="53">Thái Nguyên</option>
                    <option value="54">Thanh Hóa</option>
                    <option value="55">Thừa Thiên Huế</option>
                    <option value="56">Tiền Giang</option>
                    <option value="57">TP Hồ Chí Minh</option>
                    <option value="58">Trà Vinh</option>
                    <option value="59">Tuyên Quang</option>
                    <option value="60">Vĩnh Long</option>
                    <option value="61">Vĩnh Phúc</option>
                    <option value="62">Yên Bái</option>
                    <option value="63">Đắk Nông</option>
                </select>
            </label>
            <label class="labeltable">
                <span>Địa chỉ nhà <span class="required1">*</span></span>
                <input type="text" name="houseadd" placeholder="Nhập địa chỉ nhận hàng" required>
            </label>
            <label class="labeltable">
                <span>Quận / Huyện <span class="required1">*</span></span>
                <input type="text" name="city" placeholder="Nhập quận huyện"> 
            </label>
            <label class="labeltable">
                <span>SĐT <span class="required1">*</span></span>
                <input type="tel" name="city" placeholder="Nhập số điện thoại"> 
            </label>
            <label class="labeltable">
                <span>Email <span class="required1">*</span></span>
                <input type="email" name="city" placeholder="Nhập email"> 
            </label>
        </form>
        <div class="Yorder1">
            <!--  -->
            <div class="scroll-view">
                <table class="labeltable" style="width: 100%;">
                    <tr>
                        <td colspan="3" style="padding: 0;"><h3>Đơn hàng của bạn</h3></td>  
                    </tr>
                    <?php
                        if (isset($_SESSION['cart'])) 
                        {
                            $cart = $_SESSION['cart'];
                            foreach ($cart as $item) 
                            {
                                $image_name = $item['image_name'];
                                $product_name = $item['name'];
                                $quantity = $item['quantity'];      
                                echo
                                '
                                <tr>
                                    <td><img style="width:80px; height: 80px; object-fit: contain; " src="Images/'.$image_name.'" alt="anh bi loi"></td>
                                    <td>'.$product_name.'</td>
                                    <td>'.$quantity.'</td>
                                </tr>
                                ';
                            }
                        }
                    ?>
                    <!-- ... -->
                </table>
            </div>
            <table style="width: 100%;">
                <tr>
                    <td colspan="2" style="Font-weight: 900;">Tiền sách</td>
                    <td style="color: red;"><?php $formattedAmount1 = number_format($tongtien, 0, ',', '.') . ' VND';  echo $formattedAmount1 ?></td>
                </tr>
                <tr>
                    <td colspan="2" style="Font-weight: 900;">Tiền ship</td>
                    <td style="color: red;">40.000 VNĐ</td>
                </tr>
                <tr>
                    <td colspan="2" style="Font-weight: 900;">Tổng tiền</td>
                    <td style="color: red;"><?php  $formattedAmount = number_format($tongtien+40000, 0, ',', '.') . ' VND'; echo $formattedAmount?></td>
                </tr>
            </table>

            <div style="margin-top: 10px;">
            <input type="radio" name="dbt" value="dbt" checked> Thanh toán bằng ví điện tử
            </div>
            <div>
            <input type="radio" name="dbt" value="cd"> Thanh toán khi giao hàng
            </div>
            <div>
            <input type="radio" name="dbt" value="cd"> Thanh toán thẻ <span>
            <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
            </span>
            </div>
            <form action="order_confirm.php" method="POST" >
                <input type="hidden" name="tongTien" value="<?php echo $tongtien?>">
                <button type="submit" name="thanhtoan" onclick="return validateForm()">Xác nhận đơn hàng</button>
            </form>

        </div><!-- Yorder -->
    </div>
</div>
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
<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
    function validateForm() {
        // Lấy giá trị của các trường input
        var firstName = document.getElementsByName('fname')[0].value;
        var lastName = document.getElementsByName('lname')[0].value;
        var city = document.getElementsByName('city')[0].value;
        var phone = document.getElementsByName('phone')[0].value;
        var email = document.getElementsByName('email')[0].value;

        // Kiểm tra xem các trường có rỗng hay không
        if (
            firstName.trim() === '' ||
            lastName.trim() === '' ||
            city.trim() === '' ||
            phone.trim() === '' ||
            email.trim() === ''
        ) {
            alert('Vui lòng điền đầy đủ thông tin');
            return false; // Ngăn chặn gửi form
            <div class="alert alert-success">
                <strong>Success!</strong> thất.
                </div>
        }
    }
</script>
</body>