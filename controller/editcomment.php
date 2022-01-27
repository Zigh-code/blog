<?php 
 //edit comment 

if(isset($_SESSION['id']) && !empty($_SESSION['id']) && isset($_POST['edit'])){
    
    $commentaire = new CommentCrud($database);
    

    $commentaire->updateComment($_POST['edit'],$_POST['id']);
    

}
?>