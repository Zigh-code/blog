<?php 

//simple client connection /also work for admin
require('user_function.php');
if(isset($_POST['username']) && isset($_POST['pwd'])){
    $user = $_POST['username'] ;
    $pass = $_POST['pwd'];
    $message = connection($user,$pass);
}
?>
