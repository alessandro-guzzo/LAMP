<!DOCTYPE html>
<html lang="en">
<head>
  <title>Esempio ciclo for</title>
</head>
<body>
    <h1>Generazione dinamica di una tabella html</h1>

    <?php
	echo '<table border="1">';
	for($i=0; $i<10; $i++) {
		echo "<tr>";
		for($j=0; $j<10; $j++) {
			echo "<td>$i</td>";	
		}
		echo "</tr>";
	}
	echo "</table>";
	?>

</body>
</html>  