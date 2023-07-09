<?php 
	$mysqli = new mysqli('localhost', 'root','', 'dtb_ban_sach_3');
   if($mysqli->connect_errno != 0){
      echo $mysqli->connect_error;
      exit();
   }else{
      $mysqli->set_charset("utf8mb4");	
   }
	
	$records = $mysqli->query("select * from donhang, khachhang where donhang.MAKH=khachhang.MAKH");
   $nr_of_rows = $records->num_rows;
   
   // Setting the number of rows to display in a page.
   $rows_per_page = 5;
 
   // calculating the nr of pages.
   $pages = ceil($nr_of_rows / $rows_per_page);
 
   // Setting the start from, value.
   $start = 0;
   
   if(isset($_GET['page-nr'])){
      $page = $_GET['page-nr'] - 1;
      $start = $page * $rows_per_page;
   }
 
   // Query the database based on the calculated $start value, 
   // and the fixed $rows_per_page value.
   $result = $mysqli->query("SELECT * FROM don_hang, khachhang where donhang.MAKH=khachhang.MAKH LIMIT $start, $rows_per_page");
	

?>