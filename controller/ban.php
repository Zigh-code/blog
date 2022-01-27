
<?php
    //bannir un utilisateur 
    require("model/db_connect.php");
    require('model/UserCrud.php');
    if(isset($_SESSION['stat']) && $_SESSION['stat'] == "isAdmin"){
        $id = $_GET['id'];
        
        $ban = new UserCrud($database);
        $ban->bannedUser($id);
        header('Location:user');
        exit();

    }
    

?>
