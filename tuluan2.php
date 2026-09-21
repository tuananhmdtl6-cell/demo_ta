<?php

// Tạo mảng chứa thông tin các sản phẩm
$products = [
    [
        "name" => "Laptop",
        "price" => 15000000,
        "quantity" => 2
    ],
    [
        "name" => "Chuột",
        "price" => 500000,
        "quantity" => 5
    ],
    [
        "name" => "Bàn phím",
        "price" => 1000000,
        "quantity" => 3
    ],
    [
        "name" => "Tai nghe",
        "price" => 800000,
        "quantity" => 4
    ]
];

// Hàm tính tổng giá trị của tất cả sản phẩm
function totalValue($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total += $product["price"] * $product["quantity"];
    }

    return $total;
}

// Hiển thị thông tin các sản phẩm
echo "<h2>Danh sách sản phẩm</h2>";

foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product["name"] . "<br>";
    echo "Giá: " . number_format($product["price"]) . " VNĐ<br>";
    echo "Số lượng: " . $product["quantity"] . "<br>";

    $value = $product["price"] * $product["quantity"];

    echo "Thành tiền: " . number_format($value) . " VNĐ<br>";
    echo "<hr>";
}

// Tính và hiển thị tổng giá trị
$total = totalValue($products);

echo "<h2>Tổng giá trị tất cả sản phẩm: "
    . number_format($total)
    . " VNĐ</h2>";

?>
