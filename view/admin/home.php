


<?php ob_start(); 
    
    require("model/db_connect.php");
    include('model/Article.php');
    include('model/ArticleCrud.php');
?>




<main class="articles">

    <?php 

    $article = new ArticleCrud($database);
    $req = $article->findArticles();

    while($data = $req->fetch())
                {
                    $art = new Article($data);

                    ?>
    <article>
        <h3><?php echo $art->getTitle()?></h3>
        <p class="content">
            <?php echo substr($art->getContent(),0,200) //on affiche les 200 premier caractere?>... 
        </p>
       
        <a class="btnrdmr" href="delete&amp;num=<?php echo $art->getId()?>">Delete</a>
        <a class="btnrdmr" href="update_article&amp;num=<?php echo $art->getId()?>">Edit</a>
        <hr>
    </article>

    <?php }?>
</main>





<?php $content = ob_get_clean(); ?>
    
<?php require('view/admin/admin_template.php');?>