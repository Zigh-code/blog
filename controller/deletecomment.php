<?php
    //delete comments
    require("model/db_connect.php");
    require('model/CommentCrud.php');

        $id = $_GET['num'];
        
        $suppcomm = new CommentCrud($database);
        $art = $suppcomm->articleByComment($id);
        $suppcomm->deleteComment($id);
        $head ="Location:article&num=".$art;
        header($head);
        exit();
   
?>