<?php
    if(isset($_SESSION['stat']) && $_SESSION['stat'] == "isAdmin" && isset($_POST['titre']) && isset($_POST['content'])&& !empty($_POST['titre'])&& !empty($_POST['content']) ){
        $newarticle = new ArticleCrud($database);
        $auteur =new UserCrud($database);
        $id_auteur = $auteur->getIdUser($_SESSION['username']);
        $newarticle->createArticle($id_auteur['id'], $_POST['content'] , $_POST['titre']);
    }
    

?>