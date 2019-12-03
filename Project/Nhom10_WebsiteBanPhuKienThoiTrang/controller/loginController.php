<?php
include_once("model/AccountCheck.php");
	class Login{
		public $getAcc;
		
		public function __construct()
		{
			# code...
			$this->getAcc = new AccountCheck();

		}
		public function LoginAccount(){
			$ID = $_POST['IDaccount'];
			$PW = $_POST['PWaccount'];
			
			$typeAcc = $this->getAcc->DangNhapAcc($ID, $PW);
			include "view/ViewAcc.php";
			
			
		}

	}
	


?>