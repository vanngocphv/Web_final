<?php

class Product {
	public $ID_Pro;
	public $name;
	public $cost;
	public $IMG;
	
	public function __construct($ProID,$name, $cost, $IMG)  
    {  
    	$this->ID_Pro = $ProID;
        $this->name = $name;
	    $this->cost = $cost;
	    $this->IMG = $IMG;
    } 
}

?>