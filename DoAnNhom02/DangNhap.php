<?php
include 'Connection.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $sql = mysqli_query($conn, "SELECT * FROM taikhoan_khachhang, khachhang WHERE taikhoan_khachhang.MAKH = khachhang.MAKH and taikhoan_khachhang.TENDN_KH = '" . $email . "' and MATKHAU = '" . $pass . "';");
   $sql_nhanvien = mysqli_query($conn, "SELECT * FROM taikhoan_nhanvien, nhanvien WHERE taikhoan_nhanvien.MANV = nhanvien.MANV AND taikhoan_nhanvien.TENDN = '".$email."' AND taikhoan_nhanvien.MATKHAU = '".$pass."';");
   if (mysqli_num_rows($sql) > 0) {
      $row = mysqli_fetch_assoc($sql);
      $_SESSION['user_name'] = $row['TENKH'];
      $_SESSION['user_email'] = $row['TENDN_KH'];
      $_SESSION['user_id'] = $row['MAKH'];
      header('location:TrangChu.php');
   } elseif ( mysqli_num_rows($sql_nhanvien) > 0) {
      $row_nv = mysqli_fetch_assoc($sql_nhanvien);
      $_SESSION['user_name_nv'] = $row_nv['TENNV'];
      $_SESSION['user_email_nv'] = $row_nv['TENDN'];
      $_SESSION['user_id_nv'] = $row_nv['MANV'];
      header('location:GiaoDien_Admin_Lan3.php');
   } else {
      $message[] = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng nhập</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="dinhdang/dinhdang.css">

</head>
<style>
   .form-container {
      min-height: 100vh;
      background-color: var(--light-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      background-image: url("Images_Sach/1.jpg");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
   }

   .form-container form {
      padding: 2rem;
      width: 50rem;
      border-radius: .5rem;
      box-shadow: var(--box-shadow);
      border: var(--border);
      background-color: rgba(0, 0, 0, 0.3);
      text-align: center;
   }

   .form-container form .box {
      width: 100%;
      border-radius: .5rem;
      background-color: rgba(0, 0, 0, 0.3);
      padding: 1.2rem 1.4rem;
      font-size: 1.8rem;
      color: white;
      border: var(--border);
      margin: 1rem 0;
   }

   .btn {
      background-color: var(--blue);
   }
</style>

<body>
   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }
   ?>
   <div class="form-container">
      <form action="" method="post">
         <h3 style="color:white;">Đăng nhập</h3>
         <input type="text" name="email" placeholder="Tên đăng nhập" required class="box">
         <input type="password" name="password" placeholder="Mật khẩu" required class="box">
         <input type="submit" name="submit" value="Đăng nhập" class="btn">
         <p>Bạn chưa có tài khoản?<a href="DangKy.php" style="color:white;">Đăng ký ngay</a></p>
      </form>
   </div>
</body>

</html>