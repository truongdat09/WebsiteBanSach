<?php 
    include ("Class/xl_NhanVien_CRUD.php");
    $model = new NhanVien();
    $id = $_REQUEST['manv'];
    $delete = $model->delete($id);
 
    if ($delete) {
        echo "<script>alert('Xóa thành công');</script>";
        echo "<script>window.location.href = 'Linh_NhanVien_2.php';</script>";
    }
	else
	{
		echo "<script>alert('Xóa thất bại');</script>";
		echo "<script>window.location.href = 'Linh_NhanVien_2.php';</script>";
	}
 ?>