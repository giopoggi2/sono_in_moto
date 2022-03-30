import os
import pyautogui as pt
from time import sleep

#trova dove scrivere e lo scrive (va chiamata)
def scrivi_messaggio():
   global x, y
   position = pt.locateOnScreen("whatsapp/icone_basso.png", confidence=.6)
   x = position[0]
   y = position[1]
   pt.moveTo(x,y, duration=0)
   pt.moveTo(x + 120, y + 25, duration=0)
   pt.click()
   pt.typewrite("Messaggio automatico: Sono in moto ti scrivo dopo\n", interval=0.001)

#controlla se ci sono messaggi (va chiamata)
def check_messaggi():
   while True:
      #continua a controllare se ci sono messaggi nuovi
      try:
         #trova le chat senza risposta
         position = pt.locateOnScreen("whatsapp/non_visualizzato.png", confidence=.7)
         
         #se ha trovato almeno una chat esegue
         if position is not None:
            #si muove verso il pallino
            pt.moveTo(position)
            #si sposta leggermente più a sinistra per evitare problemi
            pt.moveRel(-100,0)
            #apre la chat
            pt.click()
            #pausetta per far caricare la chat
            sleep(1)
            #chiama la funzione di prima
            scrivi_messaggio()

      except(Exception):
         print("Nessun nuovo messaggio trovato") 

      #chiama lo script main.py per far ricominciare il ciclo
      os.system("py whatsapp/main.py 1")     

#chiama di nuovo la funzione      
check_messaggi()