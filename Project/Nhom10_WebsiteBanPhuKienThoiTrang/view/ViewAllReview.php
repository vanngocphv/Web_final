<html>
<head> 
<style>
body{
	margin-top: 20px;
	margin-left: 30px;
	background-color: #FFEFED;
}
.review-area{
	padding-left: 5px;
	padding-top:5px;
	padding-bottom: 5px;
	font-size: 16px;
	background-color: #FEFEFE;
}
.review-area span{
	font-weight: bold;
}
</style>
</head>

<body>
<?php
echo "<a href = '../contact.html'> Quay Về </a>";
echo "<h2> Nhận xét từ khách hàng</h2>";
echo "<hr>";
if ($xem !="X"){
	foreach ($xem as $DEM => $Review){
		echo "<div class='review-area'>";
		echo "<p>Ngày gửi: ". $Review->NGAY .", ";
		echo "ID: ". $Review->IDTHV .", Tên:";echo " ". $Review->TEN .",";echo " Loại sản phẩm: ". $Review->IDPROD ."</p>";
		echo "<p>Nội dung: <span>". $Review->NOIDUNG ."</span></p>";
		echo "<p>Email: ". $Review->EMAIL ."</p>";
		echo "</div>";
		echo "<hr>";
		
		
	}

	
	
}





?>
</body>
</html>