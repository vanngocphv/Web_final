<?php

include_once("../model/ReviewClass.php");
class Review{
	public function ReviewSearch(){
		include_once("../connect.php");
		$query = mysqli_query($conn, "SELECT * FROM DANHGIA");
		$a;
		if (mysqli_num_rows($query) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($query)) {
				$array = new ReviewClass($row["DEM"],$row["IDTHV"],$row["IDPROD"],$row["NOIDUNG"],$row["NGAY"],$row["TEN"],$row["Email"]);
				$a[$row["DEM"]]= $array;
			}
			} 
			else {
				$a="X";
			}

		return $a;
		$conn->close();
	}
}



?>