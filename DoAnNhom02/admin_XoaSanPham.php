<?php
    include("body/Connection.php");
    session_start();
        $masach = $_GET['id'];
        $_SESSION['status'] = "";
         //Kiem tra khoa chinh
        $sql_kt = "SELECT MASACH from sach_donhang where MASACH=$masach";
        $sta = $pdo->prepare($sql_kt);
        $kq = $sta->execute();
        $kt_sach=null;    
    if($sta->rowCount() > 0){
        $kt_sach = $sta->fetchAll(PDO::FETCH_BOTH);		
    }
    $kt = 1;
    // Nếu 
    if($kt_sach==null)
    {
        $sql = "delete from sach where masach = $masach";
        $sta = $pdo->prepare($sql);
        $kq = $sta->execute();
     
        if($kq){           
            $_SESSION['status'] = "Xoá thành công";
            echo $_SESSION['status'];            
            header("location:admin_SanPham.php");

        }
        else{
            echo "Xoa that bai";
            $_SESSION['status'] = "Xoá thất bại";
            echo $_SESSION['status'];   
            header("location:admin_SanPham.php");          
        }
    }   
    else{
            echo "Xoa that bai";
            $_SESSION['status'] = "Xoá thất bại";
            header("location:admin_SanPham.php");
         
    }



 
   
?>