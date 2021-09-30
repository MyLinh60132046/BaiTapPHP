<?php
function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = rand(10, 1000);
echo "Bài 1a. <br>";
echo "Số được tạo là: $number <br>";
echo ("Các số nguyên tố nhỏ hơn $number là: <br>");
for ($i = 0; $i < $number; $i++) {
    if (isPrimeNumber($i)) {
        echo ($i . " ");
    }
}
$length = strlen($number);
echo "<br>";
echo "<br>Bài 1b.";
echo "<br> Số nguyên $number có $length chữ số";

function numberMax($number)
{
    if ($number == 0) return 0;
    /*Lấy giá trị tuyệt đối của số nguyên number*/
    $number = abs($number);
    $max = 0;
    while ($number > 0) {
        $temp = $number % 10;
        $number /= 10;
        if ($temp > $max)
            $max = $temp;
    }
    return $max;
}

echo "<br>";
echo "<br>Bài 1c.";
echo "<br>Chữ số lớn nhất trong số $number là: " . numberMax($number);
