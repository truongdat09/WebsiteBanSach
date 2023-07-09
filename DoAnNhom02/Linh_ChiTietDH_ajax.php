<?php 
	include ("Connection.php");
	$madh = $_POST['madh'];
	$sql = "select * from sach_donhang ct, donhang dh, sach sh WHERE ct.MADH = dh.MADH and sh.MASACH=ct.MASACH and dh.MADH=".$madh;
	$sta = $pdo->prepare($sql);
	$sta->execute();
	
	$sql_1 = "select * from donhang where MADH=".$madh;
	$sta_1 = $pdo->prepare($sql);
	$sta_1->execute();
	
	if ($sta->rowCount() > 0)
	{
		$don_hang = $sta->fetchAll(PDO::FETCH_BOTH);	
	}
	if ($sta_1->rowCount() > 0)
	{
		$tongtien = $sta_1->fetchAll(PDO::FETCH_BOTH);	
	}
	
	
	?>

    </div>
    <div class="card">
        <div class="card-body">
             
              <div class="row">
                <div class="col-sm-12"> 
                <h2>Mã Đơn Hàng: <?php echo $madh ?></h2>
                    <table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
                        <thead>
                        <tr role="row">
                            <th>Sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá bán</th>
                            <th>Thành tiền</th>
                        </tr>
                            
                        </thead>
                        <tbody>
                        	<?php 
								foreach ($don_hang as $dh)
								{
							?>
								
								 <tr role="row" class="odd" >
									<td><?php echo $dh['TENSACH']?></td>
                                    <td><img src="Images/<?php echo $dh['ANHBIA'];?>" width="50%">
                                    <td><?php echo $dh['SOLUONG']?></td>
									<td><?php echo $dh['GIABAN']?></td>
									<td><?php echo $dh['THANHTIEN']?></td>
									
								</tr>
							
							<?php }?>
                        </tbody>
                    </table>
                </div>
              </div>   
        </div>
    </div>
    <div class="card">
        <div class="card-body">
			<?php 
                foreach ($tongtien as $dh)
                {
            ?>
            	<p>Trạng thái đơn hàng: 
				<?php 
					$t =  $dh['TRANGTHAI'];
					if ($t == 0)
					{?>
						<div class="row mt--2">
							<div class="col-12"><button class="btn btn-warning btn-sm  w-10">Chờ xác nhận</button>
							<button class="btn btn-danger btn-sm  w-10" data-id="<?php echo $dh['MADH']; ?>" >Hủy đơn hàng</button></div>
						</div>
						
	
					<?php }
					else if ($t == 2)
					{?>
						<div class="col-6"><button class="delete btn btn-danger" data-id="<?php $dh['MADH']; ?>">Đã hủy</button></div>
					<?php }	
					else
					{?>
						<input type="submit" value="Đã xác nhận"  class="btn btn-success" />
					<?php }?></p>
                <p>Hình thức thanh toán: <span style="font-weight:bold;"><?php echo $dh['HT_THANHTOAN'] ?></span></p>
                <p>Tiền ship: <span style="font-weight:bold;">40000</span> </p>
                <p>Tổng tiền: <span style="font-weight:bold;"><?php echo $dh['TONGTIEN'] ?></span> </p>
            <?php break; }?>
            
        </div>
</div>


	