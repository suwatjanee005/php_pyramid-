<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	echo($fearn);
	for($col=1;$col<=7-$fearn;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$fearn;$col++) {
		echo(" ");	
	}
	echo($fearn);
	echo "<br/>";
}
?>
