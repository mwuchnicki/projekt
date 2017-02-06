<?php 


$baza = './baza/generator.db'; 

$db = new SQLite3($baza) or die('Nie mogę otworzyć bazy!'); 

/* odbieramy dane z formularza */ 
	$tytul = SQLite3::escapeString(trim($_POST['tytul']));
	$start = SQLite3::escapeString(trim($_POST['start'])); 
	$koniec = SQLite3::escapeString(trim($_POST['koniec'])); 
	$ilosc = SQLite3::escapeString(trim($_POST['ilosc']));  
	$pytanie1 = SQLite3::escapeString(trim($_POST['pytanie1'])); 
	$pytanie2 = SQLite3::escapeString(trim($_POST['pytanie2']));
	$pytanie3 = SQLite3::escapeString(trim($_POST['pytanie3']));
	$pytanie4 = SQLite3::escapeString(trim($_POST['pytanie4'])); 
	$pytanie5 = SQLite3::escapeString(trim($_POST['pytanie5']));
	$pytanie6 = SQLite3::escapeString(trim($_POST['pytanie6']));  
	$punkt1 = SQLite3::escapeString(trim($_POST['punkt1'])); 
	$punkt2 = SQLite3::escapeString(trim($_POST['punkt2'])); 
	$punkt3 = SQLite3::escapeString(trim($_POST['punkt3'])); 
	$punkt4 = SQLite3::escapeString(trim($_POST['punkt4']));
	$punkt5 = SQLite3::escapeString(trim($_POST['punkt5'])); 
	$punkt6 = SQLite3::escapeString(trim($_POST['punkt6']));  
	$mapa = SQLite3::escapeString(trim($_POST['mapa'])); 
	$center = SQLite3::escapeString(trim($_POST['center'])); 
	$zoom = SQLite3::escapeString(trim($_POST['zoom']));  
 

/* zapisujemy dane do bazy */ 
	if($tytul and $start and $mapa and $center and $zoom) { 

		$results = $db->query(sprintf("INSERT INTO przyklad VALUES (NULL, '$tytul', '$start', '$koniec', '$ilosc', '$pytanie1', '$pytanie2', '$pytanie3', '$pytanie4', '$pytanie5', '$pytanie6', '$punkt1', '$punkt2', '$punkt3', '$punkt4', '$punkt5', '$punkt6', '$mapa', '$center', '$zoom')"))
		or die(SQLite3::escapeString($db));
		}
   
	var_dump($results);

	

/* powiadomienie o zapisie danych do bazy */ 
	if ($results) {
		echo "<b>Dane zostały zapisane do bazy.</b> Proszę wyłączyć tą stronę i przejść do <b>index.php</b> (http:167.114.239.68/ppgis/inz2/index.php)";	
	}
	else {
		echo "Dane nie zostały zapisane do bazy";
	}


$db->close(); 
?>
