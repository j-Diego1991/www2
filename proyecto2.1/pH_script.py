import numpy as np
import os.path
import re

#Crear 10 numeros aleatorios en un arrego de 10x1
lista_pH = np.random.uniform(-14.5,14.5,size = (10,1))

#Acomoda los valores del menor al mayor
for i in range (0,10):
    lista_pH = lista_pH[lista_pH[:,0].argsort()]
 
#Evita que se agreguen mas datos si el archivo datos.txt existe
if os.path.isfile("datos.txt"):
    f = open("datos.txt", "r+")
    
    f.seek(0)
    
    f.truncate()  

#Los valores del arreglo se agregan al archivo datos.txt
print(lista_pH, file= open("datos.txt", "a"))

