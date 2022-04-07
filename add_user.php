<?php
    session_start();

    include './utils/bddConnexion.php';
    include './model/model_user.php';
    include './view/menu.php';
    include './view/view_add_user.php';



        if(isset($_POST['name_user']) AND isset($_POST['first_name_user']) 
            AND isset($_POST['login_user']) AND isset($_POST['mdp_user']) AND 
            $_POST['name_user'] !='' AND $_POST['first_name_user'] !='' AND 
            $_POST['login_user'] !='' AND $_POST['mdp_user'] !=''){
                $nom =$_POST['name_user'];
                $prenom =$_POST['first_name_user'];
                $mail =$_POST['login_user'];
                $mdp =$_POST['mdp_user'];

                adduser($bdd, $nom, $prenom, $mail, $mdp) ;
                echo "Votre compte a été crée !";
            }
            else{
                echo 'Veuillez compléter les champs du formulaire';
            }

    //script gestion des messages d'erreurs en JS
    // echo '<script>
    //     console.log("'.$msg.'");
    //     setMessage("'.$msg.'");
    // </script>';        
?>