<?php
    //démarrage de la session
    session_start();
    //destruction de la session 
    session_destroy();
    //redirection
    header('Location: ./connexion.php?deconnected');
?>