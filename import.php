<?php

//importa i farmaci dall'elenco AIFA
//formattare il CSV in modo che le prime tre colonne siano ATC,principio attivo,nome
function escapetrim($value) {
	return  mysqli_real_escape_string($GLOBALS["dbcon"],trim($value));
}

$GLOBALS["dbcon"]=@mysqli_connect($dbhost, $dbuser, $dbpass);

$row = 1;
if (($handle = fopen("listefarmaci/a.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
		if (strpos($data[2],'*')!==false) {
			$data[2] = substr($data[2], 0, strpos($data[2], '*'));
			$data = array_map('escapetrim', $data);
		}
		else $data[2]="";
		if ($data[0] && $data[1] && $data[2])
			mysqli_query($GLOBALS["dbcon"],"INSERT IGNORE INTO farmaci (ATC, principio_attivo, nome) VALUES ('{$data[0]}','{$data[1]}','{$data[2]}')");
    }
    fclose($handle);
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
			mysqli_query($GLOBALS["dbcon"],"INSERT IGNORE INTO farmaci (ATC, principio_attivo, nome) VALUES ('{$data[0]}','{$data[1]}','{$data[2]}')");
    }
    fclose($handle);
}

$row = 1;
if (($handle = fopen("listefarmaci/c.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
		if ($data[0] && $data[1] && $data[2])
			mysqli_query($GLOBALS["dbcon"],"INSERT IGNORE INTO farmaci (ATC, principio_attivo, nome) VALUES ('{$data[0]}','{$data[1]}','{$data[2]}')");
    }
    fclose($handle);
}

