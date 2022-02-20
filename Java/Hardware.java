/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

class Hardware extends Product
{
	// deklarasi atribut
	private String brand;
	private String model;
	
	// constructor
	public Hardware(String brand, String model){
		this.brand= brand;
		this.model = model;
	}
	public Hardware(){}
	
	// method set & get brand
	public void setBrand(String brand){
		this.brand = brand;
	}
	public String getBrand(){
		return this.brand;
	}
		
	// method set & get model
	public void setModel(String model){
		this.model = model;
	}
	public String getModel(){
		return this.model;
	}
}
