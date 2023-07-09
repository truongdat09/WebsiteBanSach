<?php
session_start();
echo "xin chao";
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    echo $product_id;
    echo "xin chao 2";
    // Xóa một mục hàng khỏi giỏ hàng
    removeFromCart($product_id);
}

function removeFromCart($product_id) {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $product_id) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
}

//Chuyển hướng người dùng đến trang giỏ hàng
header("Location: cart.php");
exit();
?>