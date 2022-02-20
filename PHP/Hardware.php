<?php

/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

class Hardware extends Product
{
	// deklarasi atribut
	private $brand = "";
	private $model = "";
	
	// constructor
	public function __construct($brand = "", $model = ""){
		$this -> brand = $brand;
		$this -> model = $model;
	}
	
	// method set & get brand
	public function setBrand($brand){
		$this -> brand = $brand;
	}
	public function getBrand(){
		return $this -> brand;
	}
		
	// method set & get model
	public function setModel($model){
		$this -> model = $model;
	}
	public function getModel(){
		return $this -> model;
	}
}

?>
