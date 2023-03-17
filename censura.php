<!-- Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server. (ovvero all’altro file php)
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo originale e la sua lunghezza
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
stampare il nuovo paragrafo censurato e la sua lunghezza, -->


<?php
$paragrafo = $_GET['paragrafo'];
$badWord = $_GET['word'];

// var_dump($_GET);

?>
<h1>PARAGRAFO ORIGINALE</h1>
<p><?php echo $paragrafo ?></p>
<h1>CENSURA</h1>
<p><?php echo $badWord ?></p>

<?php 
$paragrafoCensurato = str_replace($badWord,'****',$paragrafo);
?>

<h1>PARAGRAFO CENSURATO</h1>
<p><?php echo $paragrafoCensurato ?></p>

<button type="submit">
    <a href="./index.php">HOME</a>
</button>