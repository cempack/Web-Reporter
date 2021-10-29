<center>
	<br><br>
	<! --thx github for the backup -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php
		$file = 'withlist.txt';
		$searchfor = '$site1';
		?>
		<h1>Thank you for your participation</h1>
	</center>
	<?php $site1 = $_GET["site"];?>
	<?php $site = $site1;?>
	<?php
	$file = fopen("list.txt", "a");
	fwrite($file,"0.0.0.0 ");
	fwrite($file,"$site".PHP_EOL);
	fclose($file);
	?>


</center>