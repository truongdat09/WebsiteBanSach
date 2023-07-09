<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xử lý tập tin</title>
</head>

<body>
<?php
	//đọc tập tin 
	function Doc_tap_tin($path)
	{
		$f = fopen($path, "r");
		$str = "";
		while (!feof($f))
		{
			$noi_dung = fgets($f);
			$str = $str.$noi_dung;	
		}	
		fclose($f);
		return $str;
	}
?>
</body>
</html>