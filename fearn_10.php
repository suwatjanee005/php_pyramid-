<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=1;$col<=5-$fearn;$col++) {
	echo(" ");
	}
	for($col=1;$col<=$fearn;$col++){
		echo($col);
	}
	for($col=$fearn;$col<=$fearn;$col++){
		echo(6-$fearn);
	}
	for($col=$fearn;$col>=1;$col--){
		echo($col);
	}
	echo "<br/>";
}
?>
