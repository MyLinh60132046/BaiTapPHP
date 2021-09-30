<?php
    $number = rand(1,10);
    echo "Số được tạo là: $number <br>";
        for($j = 1; $j <= 10; $j ++) {
            echo "$number x $j = " . ($number * $j);
            echo "<br>";
        }
?>