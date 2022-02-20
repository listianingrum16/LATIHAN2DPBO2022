# Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
# kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin 

class Product():

    # deklarasi atribut
    __idProduct = ""
    __price = 0
    
    # constructor 
    def __init__(self, idProduct = "", price = 0):
        self.__idProduct = idProduct
        self.__price = price
    
    # method set & get id product
    def setIdProduct(self, idProduct):
        self.__idProduct = idProduct
    def getIdProduct(self):
        return self.__idProduct
		
    # method set & get price
    def setPrice(self, price):
        self.__price = price
    def getPrice(self):
        return self.__price
