<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi tiet san pham</title>
	<style type="text/css">
		table, td, th, tr{
			border: 0.3px solid grey;
			/*border-collapse: collapse;*/
			
		}

		table{
			margin: auto;
			margin-top: 10%;
			width: 500px;
			text-align: left;
		}
	
		th {
			background: #FEF0E7;
			padding: 10px;
			color: #FF7E00; 
		   font-weight: bold;
		   font-size: 25px;
		   text-align: center;
		}

		td{
			 padding: 10px;
		}
		img{
			margin-left: 30px;
		}

		.bi{
			 font: bold;
		}
		div {
			margin-left:30%; 
		}
        div a{
        	margin-left: 20px;
        }
		b {
			font-style: italic;
		}
	</style>
</head>
<body>
	<?php
		include "connect.php";
		$id = $_GET["aa"];
		$result = mysqli_query($conn, "SELECT * FROM sanpham where ID like '$id'");
		if (mysqli_num_rows($result) > 0) {
		 	# code...
		 	echo "<table>";
		 		while ($row = mysqli_fetch_row($result)) {
		 			$ID=$row[0];
		 			$tenSp = $row[1];
		 			
		 			$donGia = number_format($row[2], 0, '.', '.');
		 		
		 			$hinh = $row[3];
		 			$hinh = "<img src = '$hinh' width='100px' height='150px' alt ='$tenSp' >";
	?>
	<tr>
		<th colspan="2"><?php echo $ID?> -- <?php echo $tenSp ?></td>
	</tr>
	<tr>
		<td><?php echo $hinh?></td>
		<td align="left">
			<b>Đơn giá: </b><?php echo $donGia." VND" ?><br>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div>
				<?php 
                    echo "<a href='XoaSP.php?ma=$ID'><b>Xóa Sản Phẩm</b></a>";
                    echo "<a href='SuaSP.php?ma=$ID'>Sửa sản phẩm</a>";
				 ?>
	          <a href="Sua_Xoa_SP.php">Quay lại</a>
	        </div>
	</td>
	</tr>
	<?php
		 		}
		 	echo "</table>";
		 } 
	?>
</body>
</html>