# Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
# kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin 

from Product import Product

class Hardware(Product):

    # deklarasi atribut
    __brand = ""
    __model = ""
    
    # constructor 
    def __init__(self, brand = "", model = ""):
        self.__brand = brand
        self.__model = model
    
    # method set & get brand
    def setBrand(self, brand):
        self.__brand = brand
    def getBrand(self):
        return self.__brand
		
    # method set & get model
    def setModel(self, model):
        self.__model = model
    def getModel(self):
        return self.__model
