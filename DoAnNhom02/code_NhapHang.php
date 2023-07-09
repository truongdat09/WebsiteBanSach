
<?php 
session_start();
include ("body/Connection.php");
// xoa ct phieu nhap
$masach=$_GET["id"];
if ($masach != null) {
    $sql = "DELETE FROM sach_phieunhap WHERE MASACH=$masach";
    $sta = $pdo->prepare($sql);
    $kq = $sta->execute();
    header("location:admin_NhapHang.php");      
}
//
if(isset($_POST["btn_lapPhieuNH"])){
    $mancc = $_POST["mancc"];
    $ngay = $_POST["txt_ngay"];
    $mapn = $_POST["txt_mapn"];
    //$tongnhap = $_POST["txt_tongnhap"];
    $tongnhap=null;
    echo "Max nha cc" .$mancc;
    echo "ngay: " .$ngay;
    echo "mapn: " .$mapn;
    echo "tongnhap: " .$tongnhap;               
    $sql = "Insert into phieunhap values(?,?,?,?)";
    $param = array(null,$mancc*1+1,$ngay,null);
    $sta = $pdo->prepare($sql);
    $kq = $sta->execute($param);


    $mapn = "";
    if($kq){
        // $tb = "Them thanh cong";
       
        $sql = "SELECT MAPN FROM phieunhap  ORDER BY MAPN DESC  LIMIT 1";
        $sta = $pdo->prepare($sql);
        $sta->execute();
        if($sta->rowCount() > 0){
            $sach = $sta->fetchAll(PDO::FETCH_BOTH);
        }
        foreach($sach as $cd)
        {
            $mapn = $cd["MAPN"];
            ?>

            <?php
        }
        $_SESSION['status'] = "Tạo thành công";
        header("location:admin_NhapHang.php?mapn=".$mapn);             		
    }
    else{
        echo "that bai";
        $_SESSION['status'] = "Thêm thất bại";	
    }
}
// them chi tiet phieu nhap
if(isset($_POST["btn_them"])){

    $mapn = null;
    $sql = "SELECT MAPN FROM phieunhap  ORDER BY MAPN DESC LIMIT 1";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if($sta->rowCount() > 0){
        $sach = $sta->fetchAll(PDO::FETCH_BOTH);
    }
    foreach($sach as $cd)
    {
        $mapn = $cd["MAPN"];
    }
    $masach = $_POST["masach"];
    $soluong = $_POST["txt_soluong"];
    $giaban = $_POST["txt_giaban"];
    
    //$tongnhap = $_POST["txt_tongnhap"];
    //$thanhtien = 10000 * 1;           
    $sql = "Insert into sach_phieunhap values(?,?,?,?,?)";
    $param = array($masach*1,$mapn*1,$soluong*1,$giaban*1,null);
    $sta = $pdo->prepare($sql);
    $kq = $sta->execute($param);

    // update thanh tien cua chi tiet phieu nhap
    $sql1 = "update sach_phieunhap set  TONGTIEN = SOLUONG * GIANHAP  where MAPN=$mapn";
    $sta1 = $pdo->prepare($sql1);
    $kq1 = $sta1->execute();   
   // update tong tien
    $sql2 = "update phieunhap set TONGNHAP = (select sum(tongtien) from sach_phieunhap where MAPN=$mapn) where MAPN=$mapn";
    $sta2 = $pdo->prepare($sql2);
    $kq2 = $sta2->execute();  

    
    if($kq){
         $tb = "Them thanh cong";             
            header("location:admin_NhapHang.php?mapn=".$mapn);             		
    }
    else{
        echo "that bai";
       
    }
}
?>
