<?php $site1 = $_GET["site"]; ?>
<?php $site = $site1; ?>

<?php
$id_file = fopen("whitelist.txt", "r");
$fichier = fgets($id_file);
$id_file2 = fopen("listwithoutspace.txt", "r");
$fichier2 = fgets($id_file2);

if (preg_match('#' . preg_quote($site) . '#', $fichier)) {
	$message = "This Site Is Whitelisted";
} elseif (preg_match('#' . preg_quote($site) . '#', $fichier2)) {
	echo "This Site Is Already Blocked";
} else {
	$file = fopen("list.txt", "a");

	fwrite($file, "||");
	fwrite($file, "$site");
	fwrite($file, "^" . PHP_EOL);
	fclose($file);

	$file2 = fopen("listwithoutspace.txt", "a");

	fwrite($file2, "#");
	fwrite($file2, "$site");
	fwrite($file2, "#");
	fclose($file2);

	$message = "Thank You For Your Participation";
}
?>
<center>
	<br><br>
	<! --thx github for the backup -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php
		$file = 'withlist.txt';
		$searchfor = '$site1';
		?>
		<h1>
			<?php
			echo "$message";
			?>
		</h1>
</center>