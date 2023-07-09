<?php
session_start();

// Xóa toàn bộ giỏ hàng
clearCart();

function clearCart() {
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
}

// Chuyển hướng người dùng đến trang giỏ hàng
header("Location: cart.php");
exit();
?>