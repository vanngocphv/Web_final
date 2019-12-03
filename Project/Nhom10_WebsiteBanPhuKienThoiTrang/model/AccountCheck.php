<?php

include_once ('model/Account.php');

class AccountCheck{
	public function DangNhapAcc($TaiKhoan, $MatKhau){
		//mở kết nối MySql để check
		$servername = "localhost";
		$username = "root";
		$password = "";
		$row;$a;$sql;
		
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		$sql = "SELECT ID,TENTHV,LOAITK,MK FROM THANHVIEN WHERE ID = '{$TaiKhoan}' AND MK = '{$MatKhau}'";
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$a = new Taikhoan($row["ID"],$row["MK"],$row["LOAITK"],$row["TENTHV"]);
			}
		} else {
				$a="X";
			}
		$conn->close();
		return $a;
	}
	
	public function EditAcc($ID,$PW,$Name,$Addr){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$sql;
		$Pass = $PW;
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		if ($Pass!="X")
		$sql = "UPDATE THANHVIEN SET TenThV= '".$Name."' ,MK= '".$PW."',DiaChi= '".$Addr."' WHERE ID = '".$ID."'";
		else $sql = "UPDATE THANHVIEN SET TenThV= '".$Name."',DiaChi= '".$Addr."' WHERE ID = '".$ID."'";

		$result = $conn->query($sql);

		
		$conn->close();
		return;

	}
	
	public function SignAcc($ID, $PW, $Name, $Addr){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$sql;$type = 0;
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		$sql = "SELECT TENTHV FROM THANHVIEN WHERE ID LIKE '{$ID}'";
		$result = $conn->query($sql);
		
		if (mysqli_num_rows($result) > 0){
			return 0;
		}
		else{
			$sql1 = "INSERT INTO THANHVIEN(ID,TENTHV,LOAITK,MK,DIACHI) VALUES ('".$ID."', '".$Name."', ".$type.",'".$PW."','".$Addr."')";
			$conn->query($sql1);

		}
		$conn->close();
		return 1;
	}
	
}


	


?>