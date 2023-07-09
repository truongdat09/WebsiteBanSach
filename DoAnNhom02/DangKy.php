<?php
error_reporting(0);

include 'Connection.php';

if(isset($_POST['submit'])){

   $tendn = mysqli_real_escape_string($conn, $_POST['tendn']);
   $matkhau = mysqli_real_escape_string($conn, $_POST['matkhau']);
   $hoten = mysqli_real_escape_string($conn, $_POST['hoten']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $diachi = mysqli_real_escape_string($conn, $_POST['diachi']);
   $sodienthoai = mysqli_real_escape_string($conn, $_POST['sodienthoai']);  

   $sql = mysqli_query($conn, "SELECT * FROM taikhoan_khachhang, khachhang WHERE taikhoan_khachhang.MAKH = khachhang.MAKH and taikhoan_khachhang.TENDN_KH = '" . $tendn . "';") or die('query failed');

   if(mysqli_num_rows($sql) > 0){
      $message[] = 'Tên đăng nhập đã tồn tại!';
   }
   else{
         mysqli_query($conn, "INSERT INTO khachhang (TENKH, DIACHI, EMAIL,SDT) VALUES ('".$hoten."','".$diachi."','".$email."','".$sodienthoai."');") or die('query failed');
         $makh = mysqli_query($conn,"SELECT MAX(MAKH) FROM khachhang;");
         settype($makh,'int');
         mysqli_query($conn,"INSERT INTO taikhoan_khachhang VALUES ('".$tendn."',$makh,'".$matkhau."');");
         mysqli_query($conn,"UPDATE khachhang SET TENDN_KH = '".$tendn."' WHERE MAKH = $makh");
         mysqli_query($conn,"UPDATE khachhang SET TENDN_KH = '".$tendn."' WHERE MAKH = $makh");
         $message[] = 'Đăng ký thành công!';
         //header('location:DangNhap.php');
      }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng ký</title>
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
<body>
   <div class="form-container">
      <form action="" method="post">
         <h3 style="color:white;">đăng ký ngay</h3>
         <input type="text" name="tendn" placeholder="Tên đăng nhập" required class="box">
         <input type="password" name="matkhau" placeholder="Mật khẩu" required class="box">         
         <input type="text" name="hoten" placeholder="Họ tên" required class="box">
         <input type="email" name="email" placeholder="Email" required class="box">
         <input type="text" name="diachi" placeholder="Địa chỉ" required class="box">
         <input type="number" name="sodienthoai" placeholder="Số điện thoại" required class="box">
         <input type="submit" name="submit" value="Đăng Ký" class="btn">
         <p>Bạn đã có tài khoản? <a href="DangNhap.php" style="color: white;">Đăng nhập ngay</a></p>
      </form>
   </div>
</body>

</html>