<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Sắp xếp bài hat</title>

    <style type="text/css">

        body {  

            background-color: #d24dff;

        }

        table{

            background: #;

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

    </style>

</head>



<body>!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<body>
<?php 
	$songlist=array(
		"Hoa nở không màu"=>1,
		"Em gái mưa"=>4,
		"Bậu ơi đừng khóc"=>3,
		"Xin chào Việt Nam"=>2);
	?>
	 <h2>Danh sách bài hát chưa sắp xếp</h2>
	 <table border="1">
	 	<tr>
	 		<th>
	 			<b>Bài hát</b>
	 		</th>
	 		<th><b>Hạng</b></th>
	 	</tr>
	 <?php 
	 	foreach($songlist as $k=>$v){
	 		echo "<tr>
	 				<td>$k</td>
	 				<td>$v</td>
	 			 </tr>";
	 	}
	 ?>
	 </table>
	 
	 <?php  
	 		//Sắp xếp danh sách bài hát theo hạng
	 	asort($songlist);
	 ?>
	 <h2>Danh sách bài hát sau khi sắp xếp</h2>
	 <table border="1">
	 	<tr>
	 		<th>
	 			<b>Bài hát</b>
	 		</th>
	 		<th><b>Hạng</b></th>
	 	</tr>
	 <?php 
	 	foreach($songlist as $k=>$v){
	 		echo "<tr>
	 				<td>$k</td>
	 				<td>$v</td>
	 			 </tr>";
	 	}
 ?>
 </table>
</body>
</html>