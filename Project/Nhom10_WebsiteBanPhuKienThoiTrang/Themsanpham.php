<!DOCTYPE html>
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

	<?php
		include"connect.php";
		$idSp = $tenSp  = $dongia  = $hinh = $image_name =  "";
		
		if (isset($_POST['txtid'])){
			$idSp = $_POST['txtid'];
		}

		if (isset($_POST['txtTenSP'])){
			$tenSp = $_POST['txtTenSP'];
		}
			
		if (isset($_POST['txtDonGia'])){
			$dongia = $_POST['txtDonGia'];
		}


		if (isset($_POST['txtHinh'])){
			$hinh = $_POST['txtHinh'];
		}

		if (isset($_FILES["file"])) {
			$image_name = $_FILES["file"]["name"];
			if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){
           		$path = realpath($_FILES["file"]["name"]);
        	}
			
		}
		
	?>

	<form method="post" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<th colspan="2">THÊM SẢN PHẨM MỚI</th>
			</tr>

			<tr>
				<td>ID sản phẩm:</td>
				<td><input type="text" name="txtid" id="txtid" value="<?php echo isset($_POST['txtid']) ? $idSp : "" ?>"></td>
			</tr>

			<tr>
				<td>Tên Sản Phẩm:</td>
				<td><input type="text" name="txtTenSP" id="txtTenSP" value="<?php echo isset($_POST['txtTenSP']) ? $tenSp : "" ?>" width="50"></td>
			</tr>

			

			<tr>
				<td>Loại Sản Phẩm:</td>
				<td>
					<select>
						<option value="Ao">Áo Thời Trang</option>
					    <option value="Quan">Quần Thời Trang</option>
					    <option value="Balo-Giay">Balo - Giày</option>
					</select>
					
				</td>
			</tr>

			<tr>
				<td>Đơn giá:</td>
				<td><input type="text" name="txtDonGia" id="txtDonGia" value="<?php echo isset($_POST['txtDonGia']) ? $dongia : "" ?>"> (VNĐ)</td>
			</tr>

			
			<tr>
				<td>Mô tả:</td>
				<td>
					<textarea name="txtMoTa" id="txtMoTa" rows="5" cols="100"></textarea>
				</td>
			</tr>

			<tr>
				<td>Hình ảnh:</td>
				<td><input type="text" name="txtHinh" id="txtHinh" value="<?php echo isset($image_name) ? $image_name : "" ?>"> <input type="file" name="file" id="file"></input></td>
			</tr>


			<tr>
				<td colspan="2" align="center"><input type="submit" name="btnAdd" id="btnAdd" value="Thêm mới">
                <button style="padding: 5px;"><a href="Thongtinsanpham.php">Quay Lại</a></button>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center" style = "font-size:14px;"> <p>Lưu ý: Áo thì ID = AO + số, Quần thì ID = QU + số, Balo thì ID =BL + số, Giày thì ID = GI + số (số từ 00-99)</p>
				<p>ví dụ: AO10, QU10, BL10, GI10</p>
				</td>
			</tr>
		</table>
		

		<div class="msg">
			<?php 
				include"connect.php";
				if (isset($_POST['btnAdd'])){
                  $result= mysqli_query($conn,'SELECT * FROM sanpham where ID="'.$_POST['txtid'].'"');
                  $result1= mysqli_query($conn,'SELECT * FROM sanpham where tenSP="'.$_POST['txtTenSP'].'"');
					if ($idSp != "" && $tenSp != "" && strlen($idSp) <= 6 && strlen($tenSp) <= 100 && $dongia!=""){
                       
                         if( mysqli_num_rows($result) <> 0 ||  mysqli_num_rows($result1) <> 0){
                         	echo 'Thêm sản phẩm thất bại!! Vui lòng kiểm tra lại ID và Tên Sản Phẩm';
                         }
                         else{
                       	echo "Thêm sản phẩm thành công!";
                       	mysqli_query($conn,"INSERT INTO sanpham(ID,TenSP,Gia,fileIMG) VALUES ('$idSp','$tenSp','$dongia','$image_name')");

                         }
						
					}
					else {
						echo "Kiểm tra lại thông tin nhập vào";
					}
				}


			?>
		</div>
	</form>

</body>
</html>