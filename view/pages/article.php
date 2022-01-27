<?php ob_start(); ?>
<article class="article">
    <?php 
        $id = $_GET['num'];
        require("model/db_connect.php");
        include('model/Article.php');
        include('model/ArticleCrud.php');
        
    require("model/Comment.php");
    require("model/CommentCrud.php");
    
    require("model/UserCrud.php");

        $article = new ArticleCrud($database);
        $req = $article->readArticleById($id);
        $art = new Article($req);

        $auteur =new UserCrud($database);

        ?>
    <h2><?php echo $art->getTitle()?></h2>
    <p class="content">
        <?php echo $art->getContent()?>
    </p>
    <div class="auteur">
        Auteur: 
        <?php echo $auteur->getUsernameById($art->getAuthor())['username'];?>
    </div>
</article>
<?php include("view/component/comment.php")?>

<script src="view/style/comment.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('view/component/main_template.php');?>