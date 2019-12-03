<?php
include_once("model/Model.php");

	class changePage{
		public $model;


		public function __construct()
		{
			# code...
			$this->model = new Model();

		}

		public function ChangePage(){
			/*$page = $_GET['Page'];
			if ($page == "AO"){
				$Lists = $this->model->getAo();
				include 'view/ViewList.php';
			}
			else if ($page == "QUAN"){
				$Lists = $this->model->getQuan();
				include 'view/ViewList.php';
			}
			else {
				$Lists = $this->model->getKhac();
				include 'view/ViewList.php';

			}*/
			$page = $_GET['Page'];
			$Lists = $this->model->getProD($page);
			include 'view/ViewList.php';
		}
		public function ChangeProd(){
			$ProD = $this->model->ChangeProd();
			include 'view/ViewProduct.php';
		}
	}





?>