# Farmaci_MySQL
Creazione tabella database con lista farmaci italiani fasce A C H

Per una applicazione interna, avevo bisogno di un elenco dei farmaci italiani che specificasse nome commerciale e principio attivo, e sono rimasto sorpreso nel non averne trovato uno semplice e comprensivo, per questo ho scaricato gli elenchi dal sito AIFA, link attuali https://www.aifa.gov.it/liste-farmaci-a-h e http://www.agenziafarmaco.gov.it/content/aggiornamento-farmaci-di-fascia-%E2%80%9Cc%E2%80%9D(ma potrebbero cambiare) e ho scritto una routine in PHP per inserire i farmaci nel database.

L'obiettivo è semplicemente associare un principio attivo al nome commerciale, quindi non mi interessa la differenza tra "compresse/polvere" né il dosaggio, e giacché c'ero ho importato anche il codice ATC che identifica con precisione il tipo di azione del farmaco.

Questi i passaggi:
- Aprire le liste in un foglio di calcolo, e rimuovere TUTTE le colonne ad eccezione di ATC, Nome commerciale e Principio attivo, quindi esportare in CSV.
- Creare una tabella MySQL con il file sql fornito
- Fornire al codice PHP il percorso dei file da importare
- Eseguire il codice PHP

Il codice PHP è stato estrapolato e "ordinato" direttamente dal codice originale della mia applicazione, quindi si presuppone che siate sufficientemente pratici per adattarlo alle vostre esigenze, e scoprire anche eventuali errori!
