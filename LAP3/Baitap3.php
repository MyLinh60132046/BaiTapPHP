<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Phép tính hai số</title>
    <style type="text/css">
        body {  
    background-color: ;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
           font-family: verdana;
            text-align: center;
/* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
        vehicle1{
        	color: blue; 
        }

    </style>
</head>
<body>
<?php 
if(isset($_POST['sothunhat']))  
    $sothunhat=trim($_POST['sothunhat']); 
else $sothunhat="";
if(isset($_POST['sothuhai']))  
    $sothuhai=trim($_POST['sothuhai']); 
else $sothuhai="";
?>

<form action="/action_page.php" align='center'>
	Chọn phép tính
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Cộng</label>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Trừ</label>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Nhân</label>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Chia</label><br><br>
  <tr><td>Số thứ nhất:</td>
     <td><input type="text" name="sothunhat" value="<?php  echo $sothunhat;?> "/></td></tr>	<br>
      <tr><td>Số thứ hai:</td>
     <td><input type="text" name="sothuhai" value="<?php  echo $sothuhai;?> "/></td></tr> <br>
  <input type="submit" value="Tính">
</form>
	 </table>
 
</form>
</body>
</html>

