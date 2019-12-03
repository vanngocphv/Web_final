<?php

include_once("../model/Product.php");

class Model {
	
	public function searchItem($name){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$row;$a;$sql;
		
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,"quanly_mysql");
		$sql = "SELECT ID,TENSP,GIA,FILEIMG FROM SANPHAM WHERE TENSP LIKE '%".$name."%' OR ID LIKE '".$name."%'";
		
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
	
	
	
	
}

?>