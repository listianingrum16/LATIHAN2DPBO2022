/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

class Product 
{
	// deklarasi atribut
	private String idProduct;
	private int price;
	
	// constructor
	public Product(String idProduct, int price){
		this.idProduct = idProduct;
		this.price = price;
	}
	public Product(){}
	
	// method set & get id product
	public void setIdProduct(String idProduct){
		this.idProduct = idProduct;
	}
	public String getIdProduct(){
		return this.idProduct;
	}
		
	// method set & get price
	public void setPrice(int price){
		this.price = price;
	}
	public int getPrice(){
		return this.price;
	}
}
