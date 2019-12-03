<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa - Xóa Thông Tin Sản Phẩm</title>
	<style type="text/css">
		table{
			border: 1px solid;
			width: 1000px;
			margin:auto;
			text-align: center;
			background: lightblue;
			-moz-border-radius: 10px;
            -webkit-border-radius: 10px;
		}
		td{
			padding: 20px;
		}
		body{
			background: antiquewhite;
		}
		div{
			margin-top: 30px;
             margin-left: 40%;
		}
		div a{

			text-align: center;
			margin-right: 20px;

		}
	</style>
</head>
<?php
	include "connect.php";
	$result = mysqli_query($conn, "SELECT * FROM sanpham ORDER BY ID ASC");
	if (mysqli_num_rows($result) <> 0) {
		echo "<h1 align= 'center'> Các Loại Sản Phẩm </h1>";
		echo "<table>";
		$stt = 0;
		while ($row = mysqli_fetch_row($result)) {
			$id = $row[0];
			$TenSP = $row[1];
			$Gia = number_format($row[2], 0, '.', '.');

			$image_path = $row[3];
			$hinh = "<img src='$image_path' width='100px' height='150px' alt = '$TenSP'>";

			if($stt == 0) echo "<tr>";

			echo "<td>";
				echo"<a href='chiTietSP.php?aa=$id'>
				<b>$TenSP</b></a><br>";
				echo "$Gia VNĐ <br>";
				echo "$hinh";
			echo "</td>";
			$stt +=1;
			if ($stt == 5) {
					echo "</tr>";
					$stt=0;
				}	
		}
		
		echo "</table>";

	}
	else
		echo "Khong tim thay san pham";
	mysqli_close($conn);
?>

<body>
	<!--Đường Link quay lại file thêm sản phẩm-->
	<div>
	  <a href="Themsanpham.php">Thêm sản phẩm</a>
	  <a href="#">Xóa,Sửa sản phẩm</a>
	  <a href="upload.php">Upload Ảnh </a>
	  <a href="ViewInfo.php">Quay lại</a>
	</div>
	
	
	
</body>
</html>