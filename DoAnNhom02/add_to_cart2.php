<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); // Tạo giỏ hàng mới nếu chưa tồn tại
}
$soLuong = intval($_GET['quantity1']);
echo $soLuong;

if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['quantity'])&& isset($_POST['image_name'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $image_name = $_POST['image_name'];

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    $product_exists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $item['quantity'] += $quantity; // Cộng dồn số lượng
            $product_exists = true;
            break;
        }
    }

    // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới một mục hàng
    if (!$product_exists) {
        addToCart($product_id, $product_name, $product_price, $quantity, $image_name);
    }
}

function addToCart($product_id, $product_name, $product_price, $quantity, $image_name) {
    $item = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $quantity,
        'image_name' => $image_name
    );

    array_push($_SESSION['cart'], $item);
}

// Chuyển hướng người dùng đến trang giỏ hàng
header("Location: cart.php");
exit();
?>