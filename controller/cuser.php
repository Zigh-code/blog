<?php 
//create a user account
require('user_function.php');

if(isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['pwd'])){
    $username = $_POST['username'];
    $new_user = new UserCrud($database);

    if($new_user->exist($username)){
        $message = "Ce nom d'utilisateur existe deja";
       
    }
    else{
        $pass_hache = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
        $mail = $_POST['mail'];
        $new_user->createUser($username,$pass_hache,$mail,"membre");
        connection($username,$_POST['pwd']);
      
    }


}
?>