<?php $site1 = $_GET["site"];?>
<?php $site = $site1;?>
<?php
$file = fopen("list.txt", "a");
fwrite($file,"0.0.0.0 ");
fwrite($file,"$site".PHP_EOL);
fclose($file);
?>