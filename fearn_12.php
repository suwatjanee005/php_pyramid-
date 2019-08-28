<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=2;$col<=$fearn;$col++) {
	echo(" ");
	}
	for($col=$fearn;$col<=10-$fearn;$col++){
		echo($col);
	}
	echo "<br/>";
}
?>
