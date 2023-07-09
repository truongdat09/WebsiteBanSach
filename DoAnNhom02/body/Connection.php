<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=dtb_ban_sach_3","root","");
        $pdo->query("set names utf8");    
    }
    catch(PDOException $ex){
        echo "Lỗi kết nối".$ex->getMessage();
    }        
    ?>