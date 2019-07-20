<?php

//importa i farmaci dall'elenco AIFA
//formattare il CSV in modo che le prime tre colonne siano ATC,principio attivo,nome
//disattivare la routine che richiede il carattere * nel nome del farmaco, per la lista dei farmaci in classe C
function escapetrim($value) {
	return  mysqli_real_escape_string($GLOBALS["dbcon"],trim($value));
}

$row = 1;
if (($handle = fopen("listefarmaci/h.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
		if (strpos($data[2],'*')!==false) {
			$data[2] = substr($data[2], 0, strpos($data[2], '*'));
			$data = array_map('escapetrim', $data);
		}
		else $data[2]="";
		if ($data[0] && $data[1] && $data[2])
			doquery("INSERT IGNORE INTO farmaci (ATC, principio_attivo, nome) VALUES ('{$data[0]}','{$data[1]}','{$data[2]}')");
    }
    fclose($handle);
}
