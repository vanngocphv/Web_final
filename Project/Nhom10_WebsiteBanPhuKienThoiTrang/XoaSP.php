<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>THÔNG TIN SẢN PHẨM</title>
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
		include "connect.php";
	    $id = $_GET["ma"];
	    $query = mysqli_query($conn, "SELECT * FROM sanpham WHERE ID LIKE '$id'");
	    if (mysqli_num_rows($query) > 0){
	      while ($row = mysqli_fetch_row($query)) {
	        $tenSP = $row[1];
	        $gia = $row[2];
	        $hinh = $row[3];
	       
	      }
    	}

    	if (isset($_POST['Submit'])) {
			$res = "";
		   	$querydh = mysqli_query($conn, "SELECT * FROM sanpham WHERE ID LIKE '$id'");
		   	$del = "DELETE FROM sanpham where ID LIKE '$id'";
		  
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
				<td>ID Sản Phẩm:</td>
				<td><input name="id" type="text" id="id" value="<?php echo $id?>" size="20" readonly="true" style = "background-color:#00CCFF"></td>
			</tr>
			<tr>
				<td>Tên Sản Phẩm:</td>
				<td><input name="tenKH" type="text" id="tenKH" value="<?php echo isset($tenSP) ? $tenSP : ""?>" size="50"></td>
			</tr>
			<tr>
				<td>Giá:</td>
				<td><input name="dc" type="text" id="dc" value="<?php echo isset($gia) ? $gia : ""?>" size="50"></td>
			</tr>
			<tr>
				<td>Hình Ảnh:</td>
				
        <td><img src=" <?php echo $hinh; ?>" style="width: 50px;height: 50px;"></br>
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
				<td colspan="2"><a href="Sua_Xoa_SP.php">Quay về</a></td>
			</tr>

			
		</table>
	</form>
	

</body>
</html>
