<?php
	
	class Thongtin{
		
		public function nhanThongtin($ID,$IDsanpham,$Ten,$Email,$Review){
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			
			$conn = new mysqli($servername, $username, $password,"quanly_mysql");
			$ngay = date("Y-m-d");
			$sql1 = "INSERT INTO DANHGIA(IDTHV,IDPROD,NOIDUNG,TEN,NGAY,EMAIL) VALUES ('".$ID."', '".$IDsanpham."','".$Review."', '".$Ten."','".$ngay."','".$Email."')";
			$conn->query($sql1);

		
			$conn->close();
			if ($IDsanpham != "CHUNG"){
				echo '<html><head><meta http-equiv="refresh" content="0.5;url=ViewProduct.php?ID='.$IDsanpham.'">';
				echo "<script type='text/javascript'>alert('Đã thêm nhận xét, chúng tôi sẽ liên hệ bạn để hỗ trợ sớm nhất có thể!');</script></head><body>";
			}
			else {
				echo '<html><head><meta http-equiv="refresh" content="0.5;url=MainPage.php">';
				echo "<script type='text/javascript'>alert('Đã thêm nhận xét, chúng tôi sẽ liên hệ bạn để hỗ trợ sớm nhất có thể!');</script></head><body>";
			}

		
		}
		
	}




?>