<?php

/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

class Memory extends Hardware
{
	// deklarasi atribut
	private $frequency = 0;
	private $memorySize = 0;
	private $supportsCuda = "";
	
	// constructor
	public function __construct($frequency = 0, $memorySize = 0, $supportsCuda = ""){
		$this -> frequency= $frequency;
		$this -> memorySize = $memorySize;
		$this -> supportsCuda = $supportsCuda;
	}
	
	// method set & get frequency
	public function setFrequency($frequency){
		$this -> frequency = $frequency;
	}
	public function getFrequency(){
		return $this -> frequency;
	}
		
	// method set & get memory size
	public function setMemorySize($memorySize){
		$this -> memorySize = $memorySize;
	}
	public function getMemorySize(){
		return $this -> memorySize;
	}
	
	// method set & get support cuda
	public function setSupportsCuda($supportsCuda){
		$this -> supportsCuda = $supportsCuda;
	}
	public function getSupportsCuda(){
		return $this -> supportsCuda;
	}
}

?>
