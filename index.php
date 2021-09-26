<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>It's a test bro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1>Report A Website</h1>
        <form method="GET" action="sender.php">
            <input type="text" name="site" required="required"><br><br>
            <input class="button" type="submit" name="Send">

        </form>
        <br><br><br><br><br><br>
    
    
    <?php
    $monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);

echo '<p>This page has been viewed ' . $pages_vues . ' times !</p>';
?>
</center>
</body>
</html>