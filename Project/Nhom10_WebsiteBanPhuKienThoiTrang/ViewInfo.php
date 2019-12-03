<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quyền Admin</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
body{
	padding: 15px;
	font-size: 17px;
	background-color: #F5F5F5;
}


</style>
<body>


<?php
	if (!isset($_COOKIE["user"])){
		echo '<p>Bạn chưa đăng nhập</p>';
		echo '<br>';
		echo '<a href="login.html">Đăng Nhập</a>';
		echo '<br>';
		echo '<a href="MainPage.php">Quay Về Trang chủ</a>';
		echo '<br>';
		
	}
	else{
		$name = $_COOKIE["user"];
		$id = $_COOKIE["IDacc"];
		echo '<p>Xin Chào <i class="fa fa-user" aria-hidden="true"></i><strong> '.$name.'</strong></p>';
		echo '<br>';
		echo '<p>ID bạn là '.$id.' </p>';
		echo '<br>';
		echo '<p><i class="fa fa-pencil-square" aria-hidden="true"></i> Nếu muốn sửa đổi thông tin tài khoản, <a href="edit.php"><strong>CLICK VÀO ĐÂY</strong></a></p>';
		echo '<br>';
		echo '<p><i class="fa fa-home" aria-hidden="true"></i> Nếu muốn quay về Trang chủ, <a href = "MainPage.php">CLICK VÀO ĐÂY</a></p>';
		echo '<br>';
		echo '<p><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng Xuất, <a href = "logout.php">CLICK VÀO ĐÂY</a></p>';
		
		$type = $_COOKIE["LoaiTK"];
		if ($type == 1){
			echo '<br><p><i class="fa fa-wrench" aria-hidden="true"></i> Sửa đổi dữ liệu sản phẩm? <a href="Thongtinsanpham.php">CLICK VÀO ĐÂY</a></p> ';
			echo '<br><p><i class="fa fa-wrench" aria-hidden="true"></i> Sửa đổi Thành Viên? <a href="Sua_Xoa_TaiKhoan.php">CLICK VÀO ĐÂY</a></p> ';
		}
	}
	
	
	
?>

</body>
</html>