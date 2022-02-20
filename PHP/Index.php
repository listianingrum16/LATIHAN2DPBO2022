<?php

/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

include "Product.php";
include "Hardware.php";
include "Memory.php";

	// deklarasi class memory untuk memanggil semua method keluarga
	$all_obj = new Memory();
	// instansiasi class product menggunakan setter
	$all_obj -> setIdProduct("L27600");
	$all_obj -> setPrice(14784700);
	// instansiasi class hardware menggunakan setter
	$all_obj -> setBrand("Leadtek");
	$all_obj -> setModel("Quadro P400");
	// instansiasi class memory menggunakan setter
	$all_obj -> setFrequency(1227);
	$all_obj -> setMemorySize(8);
	$all_obj -> setSupportsCuda("Yes");
		
	// instansiasi class product, menggunakan constructor
	$product_obj = new Product("S53811", 5100000);
	// instansiasi class hardware menggunakan constructor
	$hardware_obj = new Hardware("Sapphire", "Pulse RX 5600 XT");
	// instansiasi class memory menggunakan constructor
	$memory_obj = new Memory(1750, 6, "No");
		
	// ambil nilai menggunakan getter untuk ditampilkan ke layar
	echo "<h2>DAFTAR PRODUK</h2>";
	echo "<h3>Produk 1</h3>";
	echo "- ID Product : ". $all_obj -> getIdProduct(). "<br>";
	echo "- Price (Rp) : ". $all_obj -> getPrice(). "<br>";
	echo "- Brand : ". $all_obj -> getBrand(). "<br>";
	echo "- Model : ". $all_obj -> getModel(). "<br>";
	echo "- Frequency (MHz) : ". $all_obj -> getFrequency(). "<br>";
	echo "- Memory Size (GB) : ". $all_obj -> getMemorySize(). "<br>";
	echo "- Support Cuda : ". $all_obj -> getSupportsCuda(). "<br>";
	echo "<h3>Produk 2</h3>";
	echo "- ID Product : ". $product_obj -> getIdProduct(). "<br>";
	echo "- Price (Rp) : ". $product_obj -> getPrice(). "<br>";
	echo "- Brand : ". $hardware_obj -> getBrand(). "<br>";
	echo "- Model : ". $hardware_obj -> getModel(). "<br>";
	echo "- Frequency (MHz) : ". $memory_obj -> getFrequency(). "<br>";
	echo "- Memory Size (GB) : ". $memory_obj -> getMemorySize(). "<br>";
	echo "- Support Cuda : ". $memory_obj -> getSupportsCuda(). "<br>";
	
?>
