<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=4;$fearn++) {
	for($col=2;$col<=0+$fearn;$col++) {
		echo(" ");
	}
	
	for($col=$fearn;$col<=$fearn+1;$col++) {
		echo($fearn);
	}
	
	for($col=1;$col<=4-$fearn;$col++){
		echo("**");
	}
	
	for($col=$fearn;$col<=$fearn+1;$col++) {
		echo($fearn);
	}
	
	echo "<br/>";
}
?>

