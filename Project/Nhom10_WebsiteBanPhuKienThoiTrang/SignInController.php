<?php
include_once("model/AccountCheck.php");
	$getAcc = new AccountCheck();

		
	$ID = $_POST['IDaccount'];
	$PW = $_POST['PWaccount'];
	$Name = $_POST['Nameaccount'];
	$Addr = $_POST['Addraccount'];
	$typeAcc = $getAcc->SignAcc($ID, $PW, $Name, $Addr);
		
	if ($typeAcc == 1){
		echo '<html><head><meta http-equiv="refresh" content="0.5;url=login.html">';
		echo "<script type='text/javascript'>alert('Đăng Ký Hoàn Tất.');</script></head><body>";
	}		
	else{
		echo '<html><head><meta http-equiv="refresh" content="0.5;url=Signin.php">';
		echo "<script type='text/javascript'>alert('Tài Khoản bạn đăng ký đã có người sử dụng, xin nhập lại tài khoản khác');</script></head><body>";
		
	}
	


?>