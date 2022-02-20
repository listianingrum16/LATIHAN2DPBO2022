# Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
# kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin 

from Product import Product
from Hardware import Hardware
from Memory import Memory

# deklarasi class memory untuk memanggil semua method keluarga
all_obj = Memory()
# instansiasi class product menggunakan setter
all_obj.setIdProduct("L27600")
all_obj.setPrice(14784700)
# instansiasi class hardware menggunakan setter
all_obj.setBrand("Leadtek")
all_obj.setModel("Quadro P400")
# instansiasi class memory menggunakan setter
all_obj.setFrequency(1227)
all_obj.setMemorySize(8)
all_obj.setSupportsCuda("Yes")
		
# instansiasi class product, menggunakan constructor
product_obj = Product("S53811", 5100000)
# instansiasi class hardware menggunakan constructor
hardware_obj = Hardware("Sapphire", "Pulse RX 5600 XT")
# instansiasi class memory menggunakan constructor
memory_obj = Memory(1750, 6, "No")

# ambil nilai menggunakan getter untuk ditampilkan ke layar
print("=============== DAFTAR PRODUK ===============")
print("Produk 1")
print("   - ID Product : " + str(all_obj.getIdProduct()))
print("   - Price (Rp) : " + str(all_obj.getPrice()))
print("   - Brand : " + str(all_obj.getBrand()))
print("   - Model : " + str(all_obj.getModel()))
print("   - Frequency (MHz) : " + str(all_obj.getFrequency()))
print("   - Memory Size (GB) : " + str(all_obj.getMemorySize()))
print("   - Support Cuda : " + str(all_obj.getSupportsCuda()))
print("Produk 2")
print("   - ID Product : " + str(product_obj.getIdProduct()))
print("   - Price (Rp) : " + str(product_obj.getPrice()))
print("   - Brand : " + str(hardware_obj.getBrand()))
print("   - Model : " + str(hardware_obj.getModel()))
print("   - Frequency (MHz) : " + str(memory_obj.getFrequency()))
print("   - Memory Size (GB) : " + str(memory_obj.getMemorySize()))
print("   - Support Cuda : " + str(memory_obj.getSupportsCuda()))
