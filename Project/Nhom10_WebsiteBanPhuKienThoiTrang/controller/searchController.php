<?php
include_once("../model/search.php");
	

			$model = new Model();

		
		

			$nameItem = $_GET['SEARCH'];
			$Lists = $model->searchItem($nameItem);
			include '../view/ViewSearch.php';

		
		
		
		
	



?>