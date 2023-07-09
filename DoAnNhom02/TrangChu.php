<?php
include 'Connection.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
   header('location:DangNhap.php');
}
?>
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
   <link rel="stylesheet" href="dinhdang/dinhdang.css" type="text/css">
   
</head>
<style>
   
   .products .box-container .box .tien{
      padding:1rem 0;
      font-size: 2rem;
      color:var(--red);
   }
   .products .box-container{
      max-width: 1400px;
      margin:0 auto; 
      display: grid;
      grid-template-columns: repeat(auto-fit, 30rem);
      align-items: flex-start; 
      gap:1.5rem; 
      justify-content: center;
   }
   .products .box-container .box{
      border-radius: .5rem;
      background-color: var(--white);
      box-shadow: var(--box-shadow);
      padding:2rem;
      text-align: center;
      border:var(--border);
      position:relative;
      width: 300px;
      height: 550px;
      /* top: 100px;
      right: 100px; */
   }
   .products .box-container .box .name{
      padding:1rem 0;
      font-size:2rem;
      color:var(--black);}
   .fa-shopping-cart{
      size: 150px;
   }
   .home{
      min-height: 70vh;
      background:linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(Images_Sach/home-bg.jpg) no-repeat;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;}   
   .box{
      font-size: 15pt;
   }
</style>
<body>
   
<?php 

include("Connection.php");
$sql = "SELECT * FROM sach ORDER BY GIABAN DESC LIMIT 0,8";
$sta = $pdo->prepare($sql);
$sta->execute();
if($sta->rowCount() > 0){
    $sach = $sta->fetchAll(PDO::FETCH_OBJ);
}
?>
<?php include("header.php"); ?>
<section class="home">

   <div class="content">
       <h3><marquee  direction="right" behavior="alternate" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()">Bạn thân mến</marquee></h3>
         <p style="text-align: justify;">
            <marquee  direction="left" behavior="scroll" onmouseover="this.stop() " onmouseout="this.start()" >
            Trí tuệ của con người sẽ trưởng thành trong tĩnh lặng, thế nhưng tính cách sẽ trưởng thành trong sự bão táp, giông tố...
            Thành công là điều ai cũng muốn thế nhưng nó là bậc thầy của sự tồi tệ. Nó quyến rũ người thông minh rằng bản thân sẽ không bao giờ thất bại.
           </marquee>
         </p>
      <a href="#" class="btn" >Xem thêm</a>
   </div>
</section>

<section class="products">

   <h1 class="title">Sản Phẩm Nổi Bật</h1>
   
   <div class="box-container">
   <?php
        foreach($sach as $s){
        ?>        
        <form action="product_details.php" method="post" class="box" style="position: relative;">
         <img src="images/<?php echo $s->ANHBIA ?>" alt="" class="image" width="100%">
         <div class="name"><?php echo $s->TENSACH?></div>
         <div class="price"><?php echo $s->GIAMGIA?></div>
         <div class="tien">Giá bán: <?php echo $formattedAmount1 = number_format($s->GIABAN, 0, ',', '.') . ' VND'; ?> </div>
         <input type="hidden" name="book_id" value="<?php echo $s->MASACH?>" />
         <input type="submit" value="Xem chi tiết" name="xem_chi_tiet" class="btn" style="position: absolute; top: 470px; right: 65px;"/>         
     </form>
        <?php } ?>
   </div>   
   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="SanPham.php" class="option-btn">Xem thêm</a>
   </div>
</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="Images_Sach/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Giới thiệu về chúng tôi</h3>
         <p style="text-align: justify;">CTY Cổ phần Thương Mại và Dịch vụ MEKONG COM (Mekong COM JSC)
             là một trong số ít công ty Thương mại điện tử đầu tiên tại Việt Nam bắt đầu với 
             Website BookShopFake.com từ tháng 12/2004. Từ khi thành lập đến nay, BookShopFake.com 
             luôn là Nhà sách trên mạng hàng đầu tại Việt Nam và được ghi nhận từ nhiều cơ quan, 
             tổ chức trong và ngoài nước. Quan trọng hơn hết, BookShopFake.com được hàng triệu khách hàng 
             thường xuyên mua sắm...</p>
         <a href="" class="btn">Xem thêm</a>
      </div>

   </div>

</section>
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
         <p> <i class="fas fa-envelope"></i> bookshopgfake@gmail.com </p>
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
<div class="zalo-chat-widget" data-oaid="4145448979147495642" data-welcome-message="Chào bạn! Bạn cần chúng tôi hỗ trợ những gì?" data-autopopup="1" data-width="300" data-height="500"></div>

<script src="https://sp.zalo.me/plugins/sdk.js"></script>
</body>
</html>