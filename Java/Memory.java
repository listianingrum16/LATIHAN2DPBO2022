/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

class Memory extends Hardware
{
	// deklarasi atribut
	private int frequency;
	private int memorySize;
	private String supportsCuda;
	
	// constructor
	public Memory(int frequency, int memorySize, String supportsCuda){
		this.frequency= frequency;
		this.memorySize = memorySize;
		this.supportsCuda = supportsCuda;
	}
	public Memory(){}
	
	// method set & get frequency
	public void setFrequency(int frequency){
		this.frequency = frequency;
	}
	public int getFrequency(){
		return this.frequency;
	}
		
	// method set & get memory size
	public void setMemorySize(int memorySize){
		this.memorySize = memorySize;
	}
	public int getMemorySize(){
		return this.memorySize;
	}
	
	// method set & get support cuda
	public void setSupportsCuda(String supportsCuda){
		this.supportsCuda = supportsCuda;
	}
	public String getSupportsCuda(){
		return this.supportsCuda;
	}
}
