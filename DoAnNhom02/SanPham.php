<?php
include 'Connection.php';
session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
   header('location:DangNhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sản phẩm của chúng tôi</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="dinhdang/dinhdang.css" type="text/css">
</head>
<style>
   .products .box-container .box .tien {
      padding: 1rem 0;
      font-size: 2rem;
      color: var(--red);
   }

   .products .box-container {
      max-width: 1400px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, 25rem);
      align-items: flex-start;
      gap: 1.5rem;
      justify-content: center;
   }

   .products .box-container .box {
      border-radius: .5rem;
      background-color: var(--white);
      box-shadow: var(--box-shadow);
      padding: 2rem;
      text-align: center;
      border: var(--border);
      position: relative;
      width: 250px;
      height: 550px;
   }

   .products1 {
      max-width: 25%;
   }

   ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 250px;
      background-color: white;
   }

   li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
   }

   li a:hover {
      background-color: #555;
      color: white;
   }

   li.active a {
      background-color: purple;
      color: #fff;
   }

   .box {
      font-size: 15pt;
   }

   .heading {
      min-height: 30vh;
      display: flex;
      flex-flow: column;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      background: url(Images_Sach/heading-bg.webp) no-repeat;
      background-size: cover;
      background-position: center;
      text-align: center;
   }
</style>

<body>
   <?php
   error_reporting(0);
   include("header.php");
   include("Connection.php");
   include("Pager.php");
   include("Connection.php");
   $sql = "SELECT * FROM sach";
   $sta = $pdo->prepare($sql);
   $sta->execute();
   if ($sta->rowCount() > 0) {
      $sach = $sta->fetchAll(PDO::FETCH_OBJ);
   }
   //Xử lý phân trang
   $p = new Pager();
   $limit = 9; /// Sô sách hiện thị lên trang
   $count = count($sach); // Tổng số sách
   $vt = $p->findStart($limit); // Tìm vị trí người dùng đi
   $pages = $p->findPages($count, $limit); // Tìm tổng số trang
   $cur = $_GET['page'];
   $phantrang = $p->pageList($cur, $pages);
   //$phantrang = $p->nextPrev($cur, $pages);
   $sql = "SELECT * FROM sach limit $vt, $limit";
   $sta = $pdo->prepare($sql);
   $sta->execute();
   $sach = $sta->fetchAll(PDO::FETCH_OBJ);
   //lay chu de len
   $sql_chude = "SELECT MACD,TENCD FROM chude LIMIT 0,9;";
   $sta_chude = $pdo->prepare($sql_chude);
   $sta_chude->execute();
   if ($sta_chude->rowCount() > 0) {
      $chude = $sta_chude->fetchAll(PDO::FETCH_OBJ);
   }
   //lay the loai len
   $sql_theloai = "SELECT MATL, TENTL FROM theloai;";
   $sta_theloai = $pdo->prepare($sql_theloai);
   $sta_theloai->execute();
   if ($sta_theloai->rowCount() > 0) {
      $theloai = $sta_theloai->fetchAll(PDO::FETCH_OBJ);
   }
   ?>

   <div class="heading">
      <h3>Sản Phẩm</h3>
      <p> <a href="TrangChu.php">Trang Chủ</a></a> / Sản Phẩm </p>
   </div>
   <section class="products">

      <h1 class="title">Sản Phẩm Của Chúng Tôi</h1>

      <div class="box-container">
         <form style="font-size:20px;">
            <ul>
               <li class="active"><a href="#">Thể loại sách</a></li>
               <?php
               foreach ($theloai as $tl) {
               ?>
                  <li><a href="SanPhamTheoTheLoai.php?id=<?php echo $tl->MATL; ?>"><?php echo $tl->TENTL ?></a></li>
               <?php } ?>
            </ul>
            <ul>
               <li class="active"><a href="#">Chủ đề sách</a></li>
               <?php
               foreach ($chude as $cd) {
               ?>
                  <li><a href="SanPhamTheoChuDe.php?id=<?php echo $cd->MACD; ?>"><?php echo $cd->TENCD ?></a></li>
               <?php } ?>
               <li><a href="SanPhamTheoChuDe.php?id=0">Xem tất cả</a></li>
            </ul>
         </form>
         <?php
         foreach ($sach as $s) {
         ?>
            <form action="product_details.php" method="post" class="box" style="position: relative;">
               <img src="images/<?php echo $s->ANHBIA ?>" alt="" class="image" width="100%">
               <div class="name"><?php echo $s->TENSACH ?></div>
               <div class="price"><?php if ($s->GIAMGIA != null) {
                                       echo "Giảm " . $s->GIAMGIA . "%";
                                    } else {
                                       echo $s->GIAMGIA;
                                    } ?></div>
               <div class="tien">Giá bán: <?php echo $formattedAmount1 = number_format($s->GIABAN, 0, ',', '.') . ' VND'; ?></div>
               <input type="hidden" name="book_id" value="<?php echo $s->MASACH ?>" />
               <input type="submit" value="Xem chi tiết" name="xem_chi_tiet" class="btn" style="position: absolute; top: 470px; right: 40px;"/>
            </form>
         <?php } ?>
   </section>
   <div style="text-align:center; font-size:15pt;"><?php echo $phantrang; ?></div>
   <br>
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
            <p> <i class="fas fa-envelope"></i> bookshopfake@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> 140 Lê Trọng Tấn, Quận Tân Phú, TPHCM</p>
         </div>

         <div class="box">
            <h3>Liên hệ với chúng tôi</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
         </div>


   </section>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>