<html>
<head>
<meta http-equiv="refresh" content="1;url=ViewInfo.php">

</head>
<body>

<?php
include_once("model/AccountCheck.php");
	
	$getAcc = new AccountCheck();

	
	$ID = $_POST['IDaccount'];
	$PW = $_POST['PWaccount'];
	if ($PW == "" || $PW == null) $PW = "X";
	$Name = $_POST['Nameaccount'];
	$Addr = $_POST['Addraccount'];
			
	$getAcc->EditAcc($ID, $PW,$Name,$Addr);
	
	echo "<script type='text/javascript'>alert('Thành Công');</script>";
			
		

	
	


?>

</head>
<body>