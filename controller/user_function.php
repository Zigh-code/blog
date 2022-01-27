<?php 
require("model/db_connect.php");
require('model/UserCrud.php');



function connection($user,$pass){
    global $database;
    $utilisateur = new UserCrud($database);
    $conn = $utilisateur->getUserByUsername($user);

    
    if ($conn) {
        if(password_verify($pass, $conn['passwrd'])){
            
            $_SESSION['id'] = $conn['id'];
            $_SESSION['username'] = $conn['username'];
            $_SESSION['stat'] = $conn['stat'];
            
            
            header('Location:accueil');
            exit();
        }
        else {
        $message = "Mots de passe ou nom d'utilisateur incorrect ";
    }
    }  
    return $message;
}


?>