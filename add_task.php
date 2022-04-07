<?php
session_start();

include './utils/bddConnexion.php';
include './model/model_task.php';
include './view/menu.php';
include './view/view_add_task.php';


if(isset($_POST['name_task']) AND isset($_POST['content_task']) 
    AND isset($_POST['date_task']) AND $_POST['name_task'] !=''
    AND $_POST['content_task'] !='' AND $_POST['date_task'] !=''){
        $name_task = $_POST['name_task'];
        $content =$_POST['content_task'];
        $date_task = $_POST['date_task'];

    addTask($bdd, $name_task, $content, $date_task) ;
    echo "$name_task a été ajouté à votre to do list !";
}
else{
    echo 'Veuillez compléter les champs du formulaire';
}
?>