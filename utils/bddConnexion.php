<?php
    $bdd = new PDO('mysql:host=localhost;dbname=todolist', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>