<?php

    include './utils/bddConnexion.php';
    include './model/model_user.php';
    include './view/menu.php';
    include './view/view_update_user.php';



    if(isset($_GET['id']) AND !empty($_GET['id'])){
        //stocker dans id la valeur de l'id_util
        $id = $_GET['id'];
        $list = getUser($bdd, $id);
        echo '<script>
        setValueInput("'.$list[0]['name_user'].'", "'.$list[0]['first_name_user'].'", "'.$list[0]['login_user'].'", 
        "'.$list[0]['mdp_user'].'");
        </script>';
        if(isset($_POST['name_user']) AND isset($_POST['first_name_user']) 
            AND isset($_POST['login_user']) AND isset($_POST['mdp_user']) AND 
            $_POST['name_user'] !='' AND $_POST['first_name_user'] !='' AND 
            $_POST['login_user'] !='' AND $_POST['mdp_user'] !=''){

            $nom =$_POST['name_user'];
            $prenom =$_POST['first_name_user'];
            $mail =$_POST['login_user'];
            $mdp =$_POST['mdp_user'];

            updateUser($bdd, $nom, $prenom, $mail, $mdp, $id);
            echo "$nom à été modifié en  BDD";
        }
        else{
            echo 'Veuillez compléter les champs du formulaire';
        }
?>