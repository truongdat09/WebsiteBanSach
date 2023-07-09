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
    <title>Tìm kiếm</title>
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
    //lay san pham len
    $ten_sach = $_GET["txt_search"];
    $sql_sach = "SELECT * FROM sach WHERE TENSACH LIKE '%" . $ten_sach . "%';";    
    $sta = $pdo->prepare($sql_sach);
    $sta->execute();
    if ($sta->rowCount() > 0) {
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
    } else {
        $message[] = 'Không có sản phẩm nào bạn yêu cầu';
    }   
    ?>
    <div class="heading">
        <h3>Sản Phẩm</h3>
        <p> <a href="TrangChu.php">Trang Chủ</a></a> / Sản Phẩm </p>
    </div>

    <section class="products">
        <h1 class="title">Tìm Kiếm</h1>
        <p style="text-align: center; color:black; font-size:15pt;">Kết Quả Tìm Kiếm Cho Từ Khoá '<?php echo $ten_sach ?>'</p>
        <br>
        <br>
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
        <div class="box-container">           
            <?php
            foreach ($sach as $s) {
            ?>
                <form action="product_details.php" method="post" class="box">
                    <img src="images/<?php echo $s->ANHBIA ?>" alt="" class="image" width="100%">
                    <div class="name"><?php echo $s->TENSACH ?></div>
                    <div class="price"><?php echo $s->GIAMGIA ?></div>
                    <div class="tien">Giá bán: <?php echo $s->GIABAN ?> đ</div>
                    <input type="hidden" name="book_id" value="<?php echo $s->MASACH ?>" />
                    <input type="submit" value="Xem chi tiết" name="xem_chi_tiet" class="btn btn-primary" />
                </form>
            <?php } ?>
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