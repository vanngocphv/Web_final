<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>THÔNG TIN THÀNH VIÊN</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			background: #FFECC4;
			padding: 5px 5px;
		}

		table {
			width: 500px;
		}

		th {
			color: #E85A0C;
			background: rgb(237,199,95);
			font-size: 25px;
		}

		#btnField {
			background: #FFE2A7;
		}

		#Submit {
			padding: 4px 7px;
		}

	</style>
</head>
<body>
	<?php 
	$res = "";
		include "../connect.php";
	    $ID= $_GET["ma"];
	    $query = mysqli_query($conn, "SELECT * FROM thanhvien WHERE ID LIKE '$ID'");
	    if (mysqli_num_rows($query) > 0){
	      while ($row = mysqli_fetch_row($query)) {
	        $tenkh = $row[1];
	        $loaitk = $row[2];
	        $matkhau = $row[3];
	        $diachi = $row[4];
	      }
    	}

    	if (isset($_POST['Submit'])) {
			$res = "";
		   	$del = "DELETE FROM thanhvien where ID LIKE '$ID'";
		  
		   		$resDel = mysqli_query($conn, $del);
		   		$res = "Xóa thành công!";
		   
	 	}
    	
	?>
	<form name="form1" method="post" action="">
		<table align="center">
			<tr>
				<th colspan="2">THÔNG TIN KHÁCH HÀNG</th>
			</tr>
			<tr>
				<td>ID:</td>
				<td><input name="ID" type="text" id="ID" value="<?php echo $ID?>" size="20" readonly="true" style = "background-color:#00CCFF"></td>
			</tr>
			<tr>
				<td>Mật Khẩu:</td>
				<td><input name="matkhau" type="text" id="matkhau" value="<?php echo isset($matkhau) ? $matkhau : ""?>"></td>
			</tr>
			<tr>
				<td>Tên Thành Viên:</td>
				<td><input name="tenkh" type="text" id="tenkh" value="<?php echo isset($tenkh) ? $tenkh : ""?>" size="50"></td>
			</tr>
			<tr>
				<td>Địa Chỉ:</td>
				<td><input name="diachi" type="text" id="diachi" value="<?php echo isset($diachi) ? $diachi : ""?>" size="50"></td>
			</tr>
			
			<tr>
				<td>Loại TK:</td>
				<td><input name="loaitk" type="text" id="loaitk" value="<?php echo isset($loaitk) ? $loaitk : ""?>" size="50"></td>
			</tr>
		

			<tr>
				<td colspan="2" id="btnField">
					<label>
					    <div align="center">
					    	<input type="submit" name="Submit" id="Submit" value="Xóa">
						</div>
					</label>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><?php echo isset($res) ? $res : "" ?></td>
			</tr>
			<tr>
				<td colspan="2"><a href="../Sua_Xoa_TaiKhoan.php">Quay về</a></td>
			</tr>

			
		</table>
	</form>
	
         
</html>
