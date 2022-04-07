<?php
    function adduser($bdd, $nom, $prenom, $mail,$mdp):void{
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur(name_user, first_name_user,
            login_user, mdp_user) 
            VALUES(:name_user, :first_name_user, :login_user, :mdp_user)');
            $req->execute(array(
                'name_user' => $nom,
                'first_name_user' =>$prenom,
                'login_user' =>$mail,
                'mdp_user' =>$mdp
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }


    function updateUser($bdd, $nom, $prenom, $mail,$mdp, $id):void{
        try{
            $req = $bdd->prepare('UPDATE utilisateur SET name_user = :name_user, first_name_user
            = :first_name_user, login_user = :login_user, mdp_user = :mdp_user 
            WHERE id_util = :id_util');
            $req->execute(array(
                'name_user' => $nom,
                'first_name_user' =>$prenom,
                'login_user' =>$mail,
                'mdp_user' =>$mdp,
                'id_user' =>$id
                ));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    function getUser($bdd, $id):array {
        try{
            $req = $bdd->prepare("SELECT name_user, first_name_user, login_user, mdp_user FROM utilisateur WHERE id_user = :id_user");
            $req->execute(array(
                'id_user' => $id,  
            ));
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>