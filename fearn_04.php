<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=4;$fearn++) {
	for($col=1;$col<=$fearn;$col++) {
		echo("*");
	}
	
	for($col=$fearn;$col>=2;$col--){
		echo($col);
	}
	
	for($col=1;$col<=$fearn;$col++){
		echo($col);
	}
	
	echo "<br/>";
}
?>

