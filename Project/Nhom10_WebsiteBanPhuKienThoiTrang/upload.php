<html>
<head>
<meta charset="utf-8">
	<title>Thêm Sản Phẩm</title>
	<style type="text/css">
		table, th, td {
			border: 1px;
			border-collapse: collapse;
			background: #FDDEDC;
		}

		table {
			margin-top: 10%;
			width: 65%;
		}

		th {
			font-size: 25px;
			font-weight: bold;
			color: white;
			background: #F86F68;
			padding: 5px;
		}

		td {
			padding: 8px 5px;
		}
		select {
			padding: 5px;
			font-size: 15px;
		}

		#hangsualist, #loaisualist {
			height: 20px;
		}

		#txtTenSP, #txtHinh {
			width: 60%;
		}

		#btnAdd {
			padding: 5px 5px;
		}

		.msg {
			background: white;
			padding: 10px;
			text-align: center;
			font-size: 15px;
		}

		.res table, .res th, .res td {
			background: white;
			border: 1px solid black;
		}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table align="center">
			

			

			<tr>
				<td>Hình ảnh:</td>
				<td><input type="text" name="txtHinh" id="txtHinh" value="<?php echo isset($image_name) ? $image_name : "" ?>"> <input type="file" name="file" id="file"></input></td>
			</tr>


			<tr>
				<td colspan="2" align="center"><input type="submit" name="btnAdd" id="btnAdd" value="Thêm mới">
				<br>
                <button style="padding: 5px;"><a href="Thongtinsanpham.php">Quay Lại</a></button>
				</td>
			</tr>
			
		</table>
</form>
<?php
if (isset($_FILES["file"])) {
			$image_name = $_FILES["file"]["name"];
			if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){
           		$path = realpath($_FILES["file"]["name"]);
        	}
			
		}
		
	?>
</body>
</html>