<?php 
	include("Connection.php");
	$madh = $_GET['madh'];
	
	$sql = "update donhang set TRANGTHAI=1 where MADH=".$madh;
	
	$sta = $pdo->prepare($sql);
	$kq = $sta->execute();
	if ($kq)
	{
		echo "cập nhật thành công";
		header("location:Linh_DonHang.php");	
	}
	else
	{
		echo "cập nhật thất bại, xem lại";	
	}
	
	
?>