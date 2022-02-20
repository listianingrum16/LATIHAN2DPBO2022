/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */
	
#include <string>
#include <iostream>
#include "Memory.cpp"
using namespace std;

int main()
{
	// deklarasi class memory untuk memanggil semua method keluarga
	Memory all_obj;
	// instansiasi class product menggunakan setter
	all_obj.setIdProduct("L27600");
	all_obj.setPrice(14784700);
	// instansiasi class hardware menggunakan setter
	all_obj.setBrand("Leadtek");
	all_obj.setModel("Quadro P400");
	// instansiasi class memory menggunakan setter
	all_obj.setFrequency(1227);
	all_obj.setMemorySize(8);
	all_obj.setSupportsCuda("Yes");
 		
	// instansiasi class product, menggunakan constructor
	Product product_obj("S53811", 5100000);
	// instansiasi class hardware menggunakan constructor
	Hardware hardware_obj("Sapphire", "Pulse RX 5600 XT");
	// instansiasi class memory menggunakan constructor
	Memory memory_obj(1750, 6, "No");

	// ambil nilai menggunakan getter untuk output 
	cout << "=============== DAFTAR PRODUK ===============" << endl;
	cout << "Produk 1" << endl;
	cout << "   - ID Product : " << all_obj.getIdProduct() << endl;
	cout << "   - Price (Rp) : " << all_obj.getPrice() << endl;
	cout << "   - Brand : " << all_obj.getBrand() << endl;
	cout << "   - Model : " << all_obj.getModel() << endl;
	cout << "   - Frequency (MHz) : " << all_obj.getFrequency() << endl;
	cout << "   - Memory Size (GB) : " << all_obj.getMemorySize() << endl;
	cout << "   - Support Cuda : " << all_obj.getSupportsCuda() << endl;
 	cout << "Produk 2" << endl;
	cout << "   - ID Product : " << product_obj.getIdProduct() << endl;
	cout << "   - Price (Rp) : " << product_obj.getPrice() << endl;
	cout << "   - Brand : " << hardware_obj.getBrand() << endl;
	cout << "   - Model : " << hardware_obj.getModel() << endl;
	cout << "   - Frequency (MHz) : " << memory_obj.getFrequency() << endl;
	cout << "   - Memory Size (GB) : " << memory_obj.getMemorySize() << endl;
	cout << "   - Support Cuda : " << memory_obj.getSupportsCuda() << endl;
	 
	return 0;
}
