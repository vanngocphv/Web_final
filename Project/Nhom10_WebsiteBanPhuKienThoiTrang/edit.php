<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>
    
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
table {
	width: auto;

	
}

td,th{
	padding: 14px;
}

</style>
<body>
<h2>
	Chỉnh Sửa Thông Tin
</h2>
<form action="changeInfo.php" method = "post">
  <table>
	<tr>
		<th>Tài Khoản/ID</th> 
		<td><input type="text" name="IDaccount" maxlength="50" size = "45" value = <?php
			$id = $_COOKIE["IDacc"];
			echo ''.$id.'';
		?> readonly></td>
	</tr>
	<tr>
		<th>Mật Khẩu/PassWord</th>
		<td><input type="password" name="PWaccount" placeholder="Mật Khẩu mới" maxlength="8" size = "45" value = ""></td>
	</tr>
	<tr>
		<th>Tên/Name</th>
		<td><input type="text" name="Nameaccount" placeholder="Tên mới"  maxlength="50" size = "45"></td>
	</tr>
	<tr>
		<th>Địa chỉ/address</th>
		<td><input type="text" name="Addraccount" placeholder="Địa chỉ mới" maxlength="50" size = "45" value = "Khong co"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Sửa"></td>
	</tr>
</table>

</form>
<div>
	<i class="fa fa-hand-o-left" aria-hidden="true"></i><a href="ViewInfo.php"> Quay Về</a>
</div>




</body>
</html>