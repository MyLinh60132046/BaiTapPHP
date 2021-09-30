<!DOCTYPE html>
<html>

<body>
    <!-- // bai 1 lab 1, xử lý N -->
    <?php  
    $n = 0;
    $nerr = "";
    $oke = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = test_input($_POST['n']);
        if (check_input($n) == 1)
            $oke = 1;
        else
            $nerr = "nhập lại [10,1000]";
    }
    function check_input($data)
    {
        // kiem tra so do co hop le khong
        if (is_numeric($data) == 1)
            if ($data >= 10 && $data <= 1000)
                return 1;
            else return 0;
    }
    // hàm này xử lý đầu vào, loại bỏ khoảng trống, v.v.v
    function test_input($data)
    {
        // xu ly cat cac khoang space, v.v.v
        $data = str_replace(' ', '', $data);        
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <form action="tailop3.php" method="POST">
        <table>
            <tr>
                <th colspan="3">Xử lý số N</th>
            </tr>
            <tr>
                <td><Label for="n">Nhập số N:</Label></td>
                <td ><input type="text" id="n" name="n" value="<?php echo $n ?>"></td>
                <td> <?php echo $nerr ?> </td>
            </tr>
            <tr>
                <td colspan="3">
                    <textarea readonly name="kq" id="kq" cols="50" rows="10"><?php
                if ($oke == 1) {
                    // cau a
                    echo " Cau a) So n la: $n  \n";
                    for ($i = 1; $i <= $n; $i++) {
                        $is_nguyento = true;
                        for ($x = 2; $x < $i; $x++) {
                            if ($i % $x == 0)
                                $is_nguyento = false;
                        }
                        if ($is_nguyento == true)
                            echo " $i, ";
                    }
                    // câu b
                    $len = strlen((string)$n);
                    echo " \n \n Cau b) So n co: $len chu so  \n";
                    //cau c
                    $strn = (string)$n;
                    $max = 0;
                    for ($i = 0; $i < $len; $i++) {
                        if ($max <= (int) $strn[$i])
                            $max = (int) $strn[$i];
                    }
                    echo " \n Cau c) So max cua n la: $max  \n";
                }
                ?></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>

</html>