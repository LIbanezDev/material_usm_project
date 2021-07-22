###INTEGRANTES:### 
    #NELSON ELISEO AMIGO CORDOVA
    #BENJAMIN ELIAS BAHAMONDES VERGARA
    #MATÍAS ANDRE GOMEZ ARANDA
    #ÁLVARO RICARDO LOPEZ REINOSO

import random


PasosEstafador = 0
PasosAgente = 0
Sw = 0
fila=str()
columna=str()
######Ubicar los protagonistas
######Ubicar al azar al estafador
FilEstafador = random.randint(1,20)
ColEstafador = random.randint(1,20)
##################################



######Ubicar al azar al agente
Incorrecto = "Si"
while Incorrecto == "Si":
    FilAgente = random.randint(1,20)
    ColAgente = random.randint(1,20)
    Incorrecto = "No"
    if FilAgente == FilEstafador and ColAgente == ColEstafador:
        Incorrecto = "Si"
    if FilAgente == FilEstafador -1 and ColAgente == ColEstafador:
        Incorrecto = "Si"
    if FilAgente == FilEstafador and ColAgente == ColAgente + 1:
        Incorrecto = "Si"
    if FilAgente == FilEstafador +1 and ColAgente == ColEstafador:
        Incorrecto = "Si"
    if FilAgente == FilEstafador and ColAgente == ColEstafador - 1:
        Incorrecto = "Si"
    if FilAgente == FilEstafador -2 and ColAgente == ColEstafador:
        Incorrecto = "Si"
    if FilAgente == FilEstafador and ColAgente == ColEstafador + 2:
        Incorrecto = "Si"
    if FilAgente == FilEstafador +2 and ColAgente == ColEstafador:
        Incorrecto = "Si"
    if FilAgente == FilEstafador and ColAgente == ColEstafador -2:
        Incorrecto = "Si"
mapa=int(0)
##

######Avance de los protagonistas
######Avance del estafador = 0, Avance del agente = 1
Contador = int(0)
a="."
var=int(0)
while Contador < 70 and Sw == 0:
    Avance = random.randint(0,1)
##Aca intentare representar al estafador y agente en el mapa
    def mostrarescenario(FilEstafador,ColEstafador,FilAgente,ColAgente):
        print("") 
        print("    1  2  3  4  5  6  7  8  9  0  1  2  3  4  5  6  7  8  9  0")
        for fila in range(1,21):
            linea = ""
            for columna in range(1,21):
                if fila==FilEstafador and columna==ColEstafador:
                    if FilEstafador == FilAgente and ColEstafador==ColAgente:
                        linea = linea+" X "
                    else:  
                        linea = linea + " E "
                else:
                    if fila==FilAgente and columna==ColAgente:
                        if FilEstafador==FilAgente and ColEstafador==ColAgente:
                            linea = linea+" X "
                        else:
                            linea = linea+" A "
                    else:
                        linea = linea+" · "
            if fila<10:
                print("",fila,"",linea)
            else:
                print(fila,"",linea)
    print("Presione Enter para continuar...")
    pausa = input()



    if Avance == 0:
        PasosEstafador = PasosEstafador + 1
        Contador = Contador + 1
        if ColEstafador > ColAgente:
            ColEstafador = ColEstafador + 1
        else:
            if ColEstafador < ColAgente:
                ColEstafador = ColEstafador - 1
            else:
                ColEstafador = ColEstafador + 0
        if FilEstafador > FilAgente:
            FilEstafador = FilEstafador + 1
        else:
             if FilEstafador < FilAgente:
                    FilEstafador = FilEstafador - 1
             else:
                FilEstafador = FilEstafador + 0
        if (FilEstafador > 20 or FilEstafador < 1) or (ColEstafador > 20 or ColEstafador < 1):
            FilEstafador = random.randint(1,20)
            ColEstafador = random.randint(1,20)
    
    if Avance == 1:
        PasosAgente = PasosAgente + 1
        Contador = Contador + 1
        if ColAgente < ColEstafador:
            ColAgente = ColAgente + 1
        else:
            if ColAgente > ColEstafador:
                ColAgente = ColAgente - 1
            else:
                ColAgente = ColAgente + 0
        if FilAgente < FilEstafador:
            FilAgente = FilAgente + 1
        else:
             if FilAgente > FilEstafador:
                    FilAgente = FilAgente - 1
             else:
                 FilAgente = FilAgente + 0
        if ColAgente > 20:
            ColAgente = 1
        else:
            if ColAgente < 1:
                ColAgente = 20
        if FilAgente > 20:
            FilAgente = 1
        else:
            if FilAgente < 1:
                FilAgente = 20
    

    
    print("Tiempo :","",Contador,"")
    print("Pasos Estafador :", "",PasosEstafador,"")
    print("Pasos Agente :", "",PasosAgente,"")
    mostrarescenario(FilEstafador, ColEstafador, FilAgente, ColAgente)
    
    ###Termino Opcion 1
    if FilAgente == FilEstafador and ColAgente == ColEstafador:
        Sw = 1
        print("El Estafador ha sido capturado")

###Termino Opcion 2
if Contador == 70:
    print("El Estafador logro escapar")

        
###Despliegue de resultados
print("La persecucion duró ", Contador, " segundos, ", "el Estafador dió ", PasosEstafador, "pasos ", "y el Agente dió", PasosAgente, "pasos")
                                                                                	
input("Presione Enter para finalizar")