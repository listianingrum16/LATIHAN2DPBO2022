<?php

/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

class Product 
{
	// deklarasi atribut
	private $idProduct = "";
	private $price = 0;
	
	// constructor
	public function __construct($idProduct = "", $price = 0){
		$this -> idProduct = $idProduct;
		$this -> price = $price;
	}
	
	// method set & get id product
	public function setIdProduct($idProduct){
		$this -> idProduct = $idProduct;
	}
	public function getIdProduct(){
		return $this -> idProduct;
	}
		
	// method set & get price
	public function setPrice($price){
		$this -> price = $price;
	}
	public function getPrice(){
		return $this -> price;
	}
}

?>
