<!DOCTYPE html>
<html lang="en">
<head>
  <title>Esempio ciclo for</title>
</head>
<body>
    <h1>Generazione dinamica di una tabella html</h1>

	<?php 

	/*
	Realizzare una pagina PHP che scriva: “Buongiorno/Buonasera/Buonanotte Paolo, 
	benvenuta nella mia prima pagina PHP” la scelta tra  Buongiorno/Buonasera/Buonanotte 
	è legata all’ora attuale (8 - 12 Buongiorno, 12-20 Buonasera, 20-8 Buonanotte) 
	Il nome “Paolo” deve essere contenuto in una variabile La pagina dev’essere 
	chiusa da “stai usando il browser   “ completata con il tipo di browser 
	impiegato dall’utente.
	*/
	$today = new DateTime("now", new DateTimeZone('Europe/Rome')); 
	echo $today->format('h:i:s'); 
	$ora = $today->format('h'); 
	echo "\nSono le $ora"; 

	
	?>

</body>
</html>  