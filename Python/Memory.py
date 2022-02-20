# Saya Listia Ningrum NIM 2008084 mengerjakan Latihan 2 dalam mata
# kuliah DPBO untuk keberkahanNya maka saya tidak akan melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin 

from Hardware import Hardware

class Memory(Hardware):

    # deklarasi atribut
    __frequency = 0
    __memorySize = 0
    __supportsCuda = ""
    
    # constructor 
    def __init__(self, frequency = 0, memorySize = 0, supportsCuda = ""):
        self.__frequency = frequency
        self.__memorySize = memorySize
        self.__supportsCuda = supportsCuda
    
    # method set & get frequency
    def setFrequency(self, frequency):
        self.__frequency = frequency
    def getFrequency(self):
        return self.__frequency
		
    # method set & get memory size
    def setMemorySize(self, memorySize):
        self.__memorySize = memorySize
    def getMemorySize(self):
        return self.__memorySize
        
    # method set & get support cuda
    def setSupportsCuda(self, supportsCuda):
        self.__supportsCuda = supportsCuda
    def getSupportsCuda(self):
        return self.__supportsCuda
