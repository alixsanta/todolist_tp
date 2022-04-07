<?php
    session_start();

    include './utils/bddConnexion.php';
    include './model/model_task.php';
    include './view/menu.php';
    include './view/view_update_task.php';

    if(isset($_POST['name_task']) AND isset($_POST['content']) 
        AND isset($_POST['date_task']) AND $_POST['name_task'] !='' AND $_POST['content'] !=''
        AND $_POST['date_task'] !=''){

        $name_task =$_POST['name_user'];
        $contenu =$_POST['content'];
        $date =$_POST['date_task'];

    updateTask($bdd, $name_task, $contenu, $date, $mdp, $id);
    echo "$name_task à été modifié";
}
else{
    echo 'Veuillez compléter les champs du formulaire';
}
?>