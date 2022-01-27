<div class="articles">

    <?php 
    
    require("model/db_connect.php");
    include('model/Article.php');
    include('model/ArticleCrud.php');
    include('model/UserCrud.php');

    $article = new ArticleCrud($database);
    $req = $article->findArticles();

    while($data = $req->fetch())
                {
                    $art = new Article($data);
                    $auteur =new UserCrud($database);
                    $authr_id = $art->getAuthor();

                    ?>
    <article>
        <h3><?php echo $art->getTitle()?></h3>
        <p class="content">
            <?php echo substr($art->getContent(),0,200) //on affiche les 200 premier caractere?>... 
        </p>
        <div class="auteur">
            <?php echo  $auteur->getUsernameById($authr_id)['username']?>
        </div>
        <a class="btnrdmr" href="article&amp;num=<?php echo $art->getId()?>">Lire plus</a>
        <hr>
    </article>

    <?php }
    $req->closeCursor();
    ?>
</div>