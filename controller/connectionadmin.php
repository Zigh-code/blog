<?php
//connexion for admin
require("model/db_connect.php");
require('model/UserCrud.php');

if(isset($_POST['username']) && isset($_POST['pwd'])){
    $user = $_POST['username'] ;
    $pass = $_POST['pwd'];

    $utilisateur = new UserCrud($database);
    $conn = $utilisateur->getUserAdminByUsername($user);

    if ($conn) {
        if(password_verify($pass, $conn['passwrd'])){
            
            $_SESSION['id'] = $conn['id'];
            $_SESSION['username'] = $user;
            $_SESSION['stat'] = "isAdmin";
            
            header('Location:admin');
            exit();
        }
     else {
        $message = "Mots de passe ou nom d'utilisateur incorrect ";
    } 
    }
    else {
        $message = "Mots de passe ou nom d'utilisateur incorrect ";
    }     
}
?>