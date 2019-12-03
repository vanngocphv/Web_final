<?php

include_once("model/Product.php");

class Model {
	/*public function getAo()
	{
		// here goes some hardcoded values to simulate the database
		return array(
			"AO01" => new Product("AO01","AO 1", "100000", "img/Ao/ao1.jpg"),
			"AO02" => new Product("AO02","AO 2", "100000", "img/Ao/ao2.jpg"),
			"AO03" => new Product("AO03","AO 3", "100000", "img/Ao/ao3.jpg")
		);
	}
	public function getQuan()
	{
		// here goes some hardcoded values to simulate the database
		return array(
			"QU01" => new Product("QU01","QUAN 1", "80000", "img/Quan/quan1.jpg"),
			"QU02" => new Product("QU02","QUAN 2", "80000", "img/Quan/quan2.jpg"),
			"QU03" => new Product("QU03","QUAN 3", "80000", "img/Quan/quan3.jpg")
		);
	}
	
	public function getKhac()
	{
		// here goes some hardcoded values to simulate the database
		return array(
			"KH01" => new Product("KH01","KHAC 1", "120000", "img/Balo-Giay/giay1.jpg"),
			"KH02" => new Product("KH02","KHAC 2", "120000", "img/Balo-Giay/balo2.jpg"),
			"KH03" => new Product("KH03","KHAC 3", "120000", "img/Balo-Giay/balo3.jpg")
		);
	}*/
	
	public function getProD($check){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$row;$a;$sql;
		$trang = 0;
		if (isset($_GET['Trang'])) $trang = $_GET['Trang'] - 1;
		if (isset($_GET['ID'])) $trang = substr($_GET['ID'],2,1);
		$typeProD = $check;
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		if ($typeProD == "AO"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'AO{$trang}%'";
		}
		else if ($typeProD == "QU" || $typeProD =="QUAN"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'QU{$trang}%'";
		}
		else $sql= "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'BL{$trang}%' OR ID LIKE 'GI{$trang}%'";
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$x = new Product($row["ID"],$row["TENSP"],$row["GIA"],$row["FILEIMG"]);
				$a[$row["ID"]]=$x;
			}
			} else {
				$a="X";
			}
		$conn->close();
		return $a;
	}
	
	public function getLikeProD($check){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$row;$a;$sql;
		
		$typeProD = $check;
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		if ($typeProD == "AO"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'AO%'";
		}
		else if ($typeProD == "QU" || $typeProD =="QUAN"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'QU%'";
		}
		else if ($typeProD == "BL"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'BL%'";
		}
		else{
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'GI%'";
		}
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$x = new Product($row["ID"],$row["TENSP"],$row["GIA"],$row["FILEIMG"]);
				$a[$row["ID"]]=$x;
			}
			} else {
				$a="";
			}
		$conn->close();
		return $a;
	}
	
	/*public function randomProD($check){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$row;$a;$sql;
		$count = 0;
		$typeProD = $check;
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		if ($typeProD == "AO"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'AO%'";
		}
		else if ($typeProD == "QU" || $typeProD =="QUAN"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'QU%'";
		}
		else if ($typeProD == "BL"){
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'BL%'";
		}
		else{
			$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'GI%'";
		}
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				if ($count < 3){
					$x = new Product($row["ID"],$row["TENSP"],$row["GIA"],$row["FILEIMG"]);
					$a[$row["ID"]]=$x;
					$count++;
				}
				else break;
			}
			} else {
				$a="";
			}
		$conn->close();
		return $a;
		
	}*/
	
	public function randomProduct($soluong){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$row;$a;$sql;
		$count = 0;
		$end = $soluong;
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		while ($count<=$end){
			$randomnumber = mt_rand(0,3);
			if ($randomnumber == 0){
				$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'AO0{$count}'";
			}
			else if ($randomnumber == 1){
				$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'QU0{$count}'";
			}
			else if ($randomnumber == 2){
				$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'BL0{$count}'";
			}
			else{
				$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE ID LIKE 'GI0{$count}'";
			}
			$result = $conn->query($sql);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$x = new Product($row["ID"],$row["TENSP"],$row["GIA"],$row["FILEIMG"]);
					$a[$row["ID"]]=$x;
				}
			}
			$count++;
		}
		$conn->close();
		return $a;
		
	}
	
	
	
	
	public function ChangeProd(){
			$ProD = $_GET['ID'];
			$Page = substr($ProD,0,2);
			
			$lists = $this->getProD($Page);
			return $lists[$ProD];
			
		}

	
}

?>