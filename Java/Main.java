/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

import java.util.*;

public class Main
{
	public static void main(String[] args)
	{
		// deklarasi class memory untuk memanggil semua method keluarga
		Memory all_obj = new Memory();
		// instansiasi class product menggunakan setter
		all_obj.setIdProduct("L27600");
		all_obj.setPrice(14784700);
		// instansiasi class hardware menggunakan setter
		all_obj.setBrand("Leadtek");
		all_obj.setModel("Quadro P4000");
		// instansiasi class memory menggunakan setter
		all_obj.setFrequency(1227);
		all_obj.setMemorySize(8);
		all_obj.setSupportsCuda("Yes");
		
		// instansiasi class product, menggunakan constructor
		Product product_obj = new Product("S53811", 5100000);
		// instansiasi class hardware menggunakan constructor
		Hardware hardware_obj = new Hardware("Sapphire", "Pulse RX 5600 XT");
		// instansiasi class memory menggunakan constructor
		Memory memory_obj = new Memory(1750, 6, "No");
		
		// ambil nilai menggunakan getter untuk ditampilkan ke layar
		System.out.println("=============== DAFTAR PRODUK ===============");
		System.out.println("Produk 1");
		System.out.println("   - ID Product : " + all_obj.getIdProduct());
		System.out.println("   - Price (Rp) : " + all_obj.getPrice());
		System.out.println("   - Brand : " + all_obj.getBrand());
		System.out.println("   - Model : " + all_obj.getModel());
		System.out.println("   - Frequency (MHz) : " + all_obj.getFrequency());
		System.out.println("   - Memory Size (GB) : " + all_obj.getMemorySize());
		System.out.println("   - Support Cuda : " + all_obj.getSupportsCuda());
		System.out.println("Produk 2");
		System.out.println("   - ID Product : " + product_obj.getIdProduct());
		System.out.println("   - Price (Rp) : " + product_obj.getPrice());
		System.out.println("   - Brand : " + hardware_obj.getBrand());
		System.out.println("   - Model : " + hardware_obj.getModel());
		System.out.println("   - Frequency (MHz) : " + memory_obj.getFrequency());
		System.out.println("   - Memory Size (GB) : " + memory_obj.getMemorySize());
		System.out.println("   - Support Cuda : " + memory_obj.getSupportsCuda());
	}
}
