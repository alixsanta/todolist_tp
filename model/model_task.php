<?php
function addTask($bdd, $name_task, $contenu, $date):void{
        try{
            $req = $bdd->prepare('INSERT INTO task(name_task, content_task, date_task) 
                                VALUES(:name_task, :content_task, :date_task)');
            $req->execute(array(
                'name_task' => $name_task,
                'content_task' =>$contenu,
                'date_task' =>$date,
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }

    function updateTask($bdd, $name_task, $contenu, $date, $id):void{
        try{
            $req = $bdd->prepare('UPDATE task SET name_task = :name_task, content
            = :content, date_task = :date_task
            WHERE id_util = :id_util');
            $req->execute(array(
                'name_task' => $name_task,
                'content' =>$contenu,
                'date_task' =>$date,
                'id_user' =>$id
                ));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
?>