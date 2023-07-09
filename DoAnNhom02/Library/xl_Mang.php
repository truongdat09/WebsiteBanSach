<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xử lý Mảng</title>
</head>

<body>
<?php
	// Xử lý mảng
	//Tách chuỗi thành mảng
	function Tach_chuoi_thanh_mang($dinhdang, $str)
	{
		$mang = array();
		$mang = explode($dinhdang, $str);
		return $mang;	
	}
 ?>
</body>
</html>