<?php

class Taikhoan {
	public $ID;
	public $PW;
	public $TypeAcc;
	public $nameAcc;
	
	public function __construct($IDacc,$PWacc, $Type,$name)  
    {  
    	$this->ID = $IDacc;
        $this->PW = $PWacc;
	    $this->TypeAcc = $Type;
		$this->nameAcc = $name;
    } 
}

?>