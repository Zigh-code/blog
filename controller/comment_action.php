<?php 
 //add comment 
if(isset($_SESSION['id'])&&!empty($_SESSION['id'])&&isset($_POST['my_comment'])){
    $username = $_SESSION['username'];
    $commentaire = new CommentCrud($database);
    $client = new UserCrud($database);
    

    $commentaire->createComment($client->getIdUser($username)['id'],$id,$_POST['my_comment']);
    

}
?>