<?php
    //delete article
    require("model/db_connect.php");
    require('model/ArticleCrud.php');
    if(isset($_SESSION['stat']) && $_SESSION['stat'] == "isAdmin"){
        $id = $_GET['num'];
        
        $supparticle = new ArticleCrud($database);
        $supparticle->deleteArticle($id);
        header('Location:admin');
        exit();
    }
?>