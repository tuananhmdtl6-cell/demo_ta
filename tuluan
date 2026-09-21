<?php

// Hàm kiểm tra một số có phải là số nguyên tố hay không
function isPrime($n)
{
    // Số nhỏ hơn 2 không phải số nguyên tố
    if ($n < 2) {
        return false;
    }

    // Kiểm tra các số từ 2 đến n - 1
    for ($i = 2; $i < $n; $i++) {
        // Nếu n chia hết cho i thì n không phải số nguyên tố
        if ($n % $i == 0) {
            return false;
        }
    }

    // Nếu không chia hết cho số nào thì là số nguyên tố
    return true;
}


// Hiển thị các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: <br>";

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}

?>
