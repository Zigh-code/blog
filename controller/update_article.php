<?php
    if(isset($_SESSION['stat']) && $_SESSION['stat'] == "isAdmin" && (isset($_POST['titre']) && !empty($_POST['titre'])||isset($_POST['content']) && !empty($_POST['content'])) ){
        $newarticle = new ArticleCrud($database);
        $newarticle->updateArticle($_POST['titre'],$_POST['content'] ,$_POST['id']);
    }
    

?>