<?php
    $a= rand(1,4);
    $b= rand(10,100);
    if($a==1)
    {
        echo "Hinh vuong canh ".$b;
        echo "<br>chu vi =" .($b*4);
        echo "<br> dien tich=".($b*$b);
    }
    if($a==2)
    {
        echo "Hinh tron ban kinh ".$b;
        echo "<br>chu vi =" .($b*2*3.14);
        echo "<br> dien tich=".($b*$b*3.14);
    }
    if($a==3)
    {
        echo "Hinh tam giac deu ".$b;
        echo "<br>chu vi =" .($b*3);
        echo "<br> dien tich=".($b*$b*1/2);
    }
    if($a==4)
    {
        echo "Hinh chu nhan ";
        echo "<br>chu vi =" .($b*2+$a*2);
        echo "<br> dien tich=".($b*$a);
    }
    ?>