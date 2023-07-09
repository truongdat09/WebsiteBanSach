<?php
    include 'DBConfig.php';
    $database = new DBConfig();
    session_start();
    $MAKH = $_SESSION['user_id'];
    echo "Ma khach hàng la".$MaKH;

    if (isset($_POST['tongTien']))
    {
        $tongTien = $_POST['tongTien'];
        $table = 'DONHANG';
        $data = [
            'MAKH' => $MAKH,
            'NGAYDAT' => date('Y-m-d'),
            'TONGTIEN' => $tongTien+40000,
            'TRANGTHAI' => 0,
            'HT_THANHTOAN' => 0
        ];
        $database -> insert($table,$data);
        echo "Mã khách dơn hàng: ".$MADH = $database->getMaxBookCode('DONHANG','MADH').'</br>';
        
         //nếu card có sản phẩm
         if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            echo "Vào dc rồi nek";
            foreach($cart as $item)
            {
                echo "id là".$product_id = $item['id'];
                $product_price = $item['price'];
                echo "Số lượng là".$quantity = $item['quantity'];
                //ép kiểu
                settype($product_id,'int');
                settype($quantity,'int');
                //Lấy số lượng hiện tại của sách đó 
                $table = 'SACH';
                $condition = 'MASACH = '.$product_id;
                echo "số lượng tồn".$SLTON = $database->getQuantity('SACH','SLTON',$condition) .'</br>';
                settype($$SLTON,'int');
                echo "số lượng mới". $SLMOI = ($SLTON - $quantity) .'</br>';
                //Update lại csdl khi thanh toán thành công
                $data = array(
                    'SLTON' => $SLMOI
                );
                $database->update($table,$data,$condition);
    
                $data1 = [
                    'MADH' => $MADH,
                    'MASACH' => $product_id,
                    'SOLUONG' => $quantity,
                    'GIABAN' => $product_price, 
                    'THANHTIEN' => $product_price*$quantity
                ];
                $database->insert('SACH_DONHANG',$data1);
                unset($_SESSION['cart']);
                //gán kiểm tra
                $_SESSION['thucThi'] = 1;
            }
        }
    }
header("Location: Checkout.php");
exit();
?>