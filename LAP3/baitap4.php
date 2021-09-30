<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>From enter information</title>
    <style type="text/css">
        
          
    </style>
</head>
<body>

<form align='center' action="XuLy.php" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><b>Enter your information</b></th>
        </thead>
<tr><td>Họ tên:</td>
 <td><input type="text" name="hoten" value=" "/></td>
</tr>
<tr><td>Địa chỉ:</td>
 <td><input type="text" name="diachi" value=" "/></td>
</tr>
<tr><td>Số điện thoại:</td>
 <td><input type="text" name="SDT" value=" "/></td>
</tr>
<tr><td>Giới tính:</td>
<td><input type="radio" name="gioitinh" value="Nam"/>Nam
<input type="radio" name="gioitinh" value="Nữ"/>Nữ</td>
</tr>
<tr><td>Quốc tịch:</td>
<td><input type="text" name="quoctich" value=" "/>Việt Nam</td>
</tr>
<tr><td>Các môn đã học:</td>
 <td><input type="checkbox" name="cacmon" value="PHP"/>PHP
     <input type="checkbox" name="cacmon" value="MySQL"/>MySQL
     <input type="checkbox" name="cacmon" value="C#"/>C#
     <input type="checkbox" name="cacmon" value="XML"/>XML
     <input type="checkbox" name="cacmon" value="Python"/>Python</td>
</tr>
<tr><td>Ghi chú:</td>
 <td><input type="text" name="ghichu" value=""/></td>
</tr>
<tr>
 <td colspan="2" align="center"><input type="submit" value="Gửi" name="gui" />
                                <input type="submit" value="Hủy" name="huy" /></td>
</tr>
</table>
</form>
</body>
</html>