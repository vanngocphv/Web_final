<?php
	if ($typeAcc !="X"){
	$cookie_name1 = "user";
	$cookie_value1 = "".$typeAcc->nameAcc."";
	setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
	$cookie_name2 = "LoaiTK";
	$cookie_value2 = "".$typeAcc->TypeAcc."";
	setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
	$cookie_name3 = "IDacc";
	$cookie_value3 = "".$typeAcc->ID."";
	setcookie($cookie_name3, $cookie_value3, time() + (86400 * 30), "/"); // 86400 = 1 day
	echo '<html><head><meta http-equiv="refresh" content="0.5;url=ViewInfo.php">';
	echo 'TK là:'.$typeAcc->ID.'';
	echo '<br>';
	echo 'tên :'.$typeAcc->nameAcc.'';
	/*echo '<br>';
	echo 'MK: '.$typeAcc->PW.'';*/
	echo '<br>';
	echo 'Loai TK: '.$typeAcc->TypeAcc.'';
	}
	else {
		$sai = "Sai Tài Khoản hoặc Mật Khẩu, vui lòng kiểm tra lại!!";
		echo '<html><head><meta http-equiv="refresh" content="0.5;url=login.html">';
		echo "<script type='text/javascript'>alert('$sai');</script></head><body>";
	}
?>
