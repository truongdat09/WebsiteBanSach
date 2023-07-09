<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	class NhanVien{
		var $manv;
		var $tennv;
		var $gtinh;
		var $sdt;
		var $tendn; 
		
		function __construct($manv, $tennv, $gtinh, $sdt, $tendn)
    	{
			$this->manv = $manv;
			$this->tennv = $tennv;
			$this->gtinh = $gtinh;
			$this->sdt = $sdt;
			$this->tendn = $tendn;
			
    	} 
		
		function Doc_danh_sach_nhanvien()
		{
			$arrNV = array();
			
			$path = "Files/nhanvien.txt";
			
			$str = Doc_tap_tin($path);
			
			$arr = Tach_chuoi_thanh_mang("/*", $str);
			
			$arr = array_slice($arr, 1);
			
			foreach($arr as $row)
			{
				$r = Tach_chuoi_thanh_mang("|", $row);
				$obj = new NhanVien($r[0], $r[1], $r[2], $r[3], $r[4]);
				$arrNV[] = $obj;	
			}
			return $arrNV;
				
		}  
		
		function Doc_danh_sach_hoa_tieu_bieu()
		{
			$arrHoaTieuBieu = array();
			// đọc danh sách hoa tiêu biểu
			$arr = $this->Doc_danh_sach_hoa();
			foreach($arr as $hoa)
			{
				if ($hoa->tieu_bieu == 1)
					$arrHoaTieuBieu[] = $hoa;	
			}
			return $arrHoaTieuBieu;	
		} 
		
		function Doc_danh_sach_hoa_Lan()
		{
			$arrHoaLan = array();
			// đọc danh sách hoa tiêu biểu
			$arr = $this->Doc_danh_sach_hoa();			
			foreach($arr as $hoa)
			{
				if($hoa->ma_loai == 1)
				{
					$arrHoaLan[] = $hoa;	
				}
			}
			return $arrHoaLan;	
		}
		
	}
?>
</body>
</html>