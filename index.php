<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Web-Reporter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1>Report A Website</h1>
        <form method="GET" action="sender.php">
            <input type="text" name="site" required="required" value="www.exemple.com"><br><br>
            <input class="button" type="submit" name="Send">

        </form>
        <br><br><br><br><br><br>

        <?php 
        $file = new \SplFileObject('list.txt', 'r');
        $file->seek(PHP_INT_MAX);        
        ?>

        <?php  
        $monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);

echo '<p>This page has been viewed ' . $pages_vues . ' times !</p>';
?>
<?php  $blocked = $file->key() + 1 - 30; ?>
<br><br>
<h2>List of blocked domaines (There are <?php echo $blocked ?> domaines blocked in the Web-Reporter list)</h2>
<textarea id="textArea">https://www.website-reporter.duckdns.org/list.txt</textarea>
<button class="button" onclick="copyToClipBoard()">Copy</button>
<script src="script.js"></script>
</center>
</body>
</html>