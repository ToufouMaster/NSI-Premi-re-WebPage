<?php

$message = "from ".$_POST["name"].", ".$_POST["email"].", ".$_POST["tel"]."\n\n----------\n\n".$_POST["msg"];

// Envoi du mail
$success = mail('owen.kala@gmx.fr', 'Pompiers de France', $message);

if ($success == false) {
    echo "<p>Erreur: mail non envoyé!</p>";
} else {
    echo "<p>Mail envoyé!</p>";
}

?>

<a href="index.php"><p>Retourner sur le Menu!</p></a>