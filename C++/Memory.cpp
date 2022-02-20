/* Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
	kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
	seperti yang telah dispesifikasikan. Aamiin */

#include <string>
#include <iostream>
#include "Hardware.cpp"	
using namespace std;

class Memory : public Hardware
{
	// deklarasi atribut
	private: 
		int frequency;
		int memorySize;
		string supportsCuda;
	
	// constructor
	public: 
	Memory(int frequency, int memorySize, string supportsCuda){
		this -> frequency = frequency;
		this -> memorySize = memorySize;
		this -> supportsCuda = supportsCuda;
	} 
	Memory(){}
	
	// method set & get frequency
	void setFrequency(int frequency){
		this -> frequency = frequency;
	}
	int getFrequency(){
		return this -> frequency;
	}
		
	// method set & get memory size
	void setMemorySize(int memorySize){
		this -> memorySize = memorySize;
	}
	int getMemorySize(){
		return this -> memorySize;
	}
	
	// method set & get support cuda
	void setSupportsCuda(string supportsCuda){
		this -> supportsCuda = supportsCuda;
	}
	string getSupportsCuda(){
		return this -> supportsCuda;
	}
	
	// destructor
	~Memory(){}
};