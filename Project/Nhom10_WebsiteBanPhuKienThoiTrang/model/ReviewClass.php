<?php
class ReviewClass{
	public $DEM;
	public $IDTHV;
	public $IDPROD;
	public $NOIDUNG;
	public $NGAY;
	public $TEN;
	public $EMAIL;
	
	public function __construct($id,$idthanhvien, $idproduct, $nd, $day, $name, $mail){
		$this->DEM = $id;
		$this->IDTHV = $idthanhvien;
		$this->IDPROD = $idproduct;
		$this->NOIDUNG = $nd;
		$this->NGAY = $day;
		$this->TEN = $name;
		$this->EMAIL = $mail;


	}		
	
	
	
}





?>