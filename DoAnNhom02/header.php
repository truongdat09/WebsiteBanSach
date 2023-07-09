<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

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
         <form action="TimKiem.php">
            <div class="icons">
               <div id="menu-btn" class="fas fa-bars"></div>
               <input style="font-size: 15pt; font-style:italic;" type="text" placeholder="Nhập tên sách cần tìm..." name="txt_search">
               <a href="#"> <button style="font-size: 18pt;" class="fas fa-search"></button> </a>
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
               <a href="bot.php"><i class="fas fa-envelope"></i></a>
                  </div>
         </form>
         <div class="user-box">
            <p>Tên đăng nhập : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <p>Họ tên : <span><?php echo $_SESSION['user_name'];?></span></p>            
            <a href="DangXuat.php" class="delete-btn">Đăng Xuất</a>
         </div>
      </div>
   </div>
</header>