import os.path
from time import sleep
import pyautogui as pt

#per avere il tempo di farlo partire
sleep(3)

#continua all'infinito
while True:
   #trova il pulsante
   scarica = pt.locateOnScreen("whatsapp/scarica.png", confidence=.8)
   x = scarica[0]
   y = scarica[1]
   #si muove verso esso
   pt.moveTo(x,y, duration=0)
   #lo preme
   pt.click()
   #pausetta per far scaricare il file
   sleep(2)
   #se il file è di nome ON lo elimina e continua dentro all'altro script
   if os.path.exists("/Users/Giopoggi2/Downloads/on.zip"):
      os.remove("/Users/Giopoggi2/Downloads/on.zip")
      os.system("py whatsapp/attivo.py 1")
   #se è di nome OFF lo elimina e ferma l'altro script ma continua ad andare
   if os.path.exists("/Users/Giopoggi2/Downloads/off.zip"):
      os.remove("/Users/Giopoggi2/Downloads/off.zip")
      print("pkill -f attivo.py")
   #pausa per evitare un eccessivo consumo di risorse
   sleep(10)
   #ricomincia il ciclo