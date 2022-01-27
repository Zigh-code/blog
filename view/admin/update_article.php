
<?php ob_start(); 
    require("model/db_connect.php");
    include('model/Article.php');
    include('model/ArticleCrud.php');

    
    
    
    $id = $_GET['num'];
    $art = new ArticleCrud($database);
    $rep = $art-> readArticleById($id);
    $article = new Article($rep);
    require('controller/update_article.php');

?>
<main id="add">
    <h4>Modifier l'article: <?=$article->getTitle()?> </h4>
    <form action="" method="post">
        <label>Nouveau titre : </label>
        <input type="text" name="titre" id="">
        <input type="hidden" name="id" value="<?=$id?>">
        <label>Modifier le texte  :</label>
        <textarea name="content" id="" cols="30" rows="10"><?=$article->getContent()?></textarea>
        <button type="submit">Publier</button>
    </form>
</main>
<?php $content = ob_get_clean(); ?>

<?php require('view/admin/admin_template.php');?>