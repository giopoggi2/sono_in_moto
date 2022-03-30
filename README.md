# sono_in_moto
Risponde automaticamente ai messaggi quando impostato su attivo
Al momento ha bisogno che la pagina web giopoggi.ga sia attiva e aperta vicino alla finestra di whatsapp altrettanto aperta e completamente visibile, miglioramenti futuri previsti.

Funzionamento:
  1. La pagina si aggiorna automaticamente ogni 5 secondi
  2. Eseguire lo script "main.py" con python
  3. Lo script scarica ed elimina il file automaticamente ogni tot secondi
  4. Se il file scaricato si chiama off.zip passare al punto 7, se si chiama on.zip passare al punto successivo
  5. Fa partire lo script "attivo.py" automaticamente
  6. Lo script del punto 5 controlla di continuo se compare il pallino verde su una chat, se compare risponde automaticamente con un messaggio preimpostato
  7. Appena lo script main.py trova un file "off.zip", cancella il file, ferma lo script "attivo.py" (in ogni caso esegue il comando, che lo script sia attivo o no)
  8. Continua a scaricare e cancellare i file in ciclo continuo, l'unico modo per fermarlo completamente è dalla console

N.B. Al momento c'è bisogno di cambiare il percorso della cartella dei download dentro allo script main.py, prossimamente provvederò a renderlo più dinamico
