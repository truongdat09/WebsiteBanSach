<?php 
	include("Connection.php");
	
	$page_url="#";
	$display = 2;
	$num_links = 5;
	
	$sql = "SELECT ANHBIA, TENSACH, GIABAN, GIAMGIA FROM sach";
	$sta = $pdo->prepare($sql);
	$sta->execute();	
	if ($sta->rowCount() > 0)
	{
		$sach = $sta->fetchAll(PDO::FETCH_OBJ);	
	}
	$total_rows = $sta->rowCount();	
	if (isset($_GET["page"]) && is_numeric($_GET["page"]))
	{
		$curr_page = $_GET["page"];	
	}
	else
	{
		$curr_page = 1;	
	}	
	$position = (($curr_page - 1)*$display);
	$total_pages = ceil($total_rows/$display);	
	//Trang bắt đầu
	if ($curr_page > $num_links)
	{
		$start = $curr_page - ($num_links - 1);	
	}
	else
	{
		$start = 1;
	}
	//TRang kết thúc
	if (($curr_page + $num_links) < $total_pages)
		$end = $curr_page + $num_links;
	else
		$end =$total_pages;
?>