<?php require_once('pw_conn.php')?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tableau</title>
        <link rel="stylesheet" href="style.css" >
        </head>
    <body>
        <form name="formsup" class="formulaire">

<?php

if (isset($_GET['suprimanno'])) {
    $sup=$_GET['suprimanno'];
    $requete="DELETE FROM `Ad` WHERE `Ad`.`id` ='$sup'";
    $resultat=mysqli_query($conn,$requete);
    if ($resultat) {
        echo "<font color='green'>La supression a été correctement effectuée</font>";
    }
    else {
        echo "<font color='red'>La supression a échouée</font>";
    }
}
?>
</form>

    </body>

</html>