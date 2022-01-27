

<div class="comments">
    <h2> Commentaires</h2>
    <?php
    if (isset($_SESSION['id'])&& !empty($_SESSION['id'])&& $_SESSION['stat']!="isBanned") {
        require('controller/comment_action.php');
        ?>
        <div class="my_comment">
            <form action="" method="post">
                <textarea name="my_comment" id="my_comment" cols="45" rows="8"placeholder="Laisser un commentaire <?php echo $_SESSION['username']?> " ></textarea>
                <button class="btnrdmr" value="submit">Envoyer</button>   
            </form>
        </div> 

    <?php }
    else {?>
        <h5><a href="connexion"> Connectez-vous pour laisser un commentaire</a></h5>
    <?php }
    ?>
    
    
    
    <ul id="comments-list" class="comments-list">
        
        <?php 

        $comm = new CommentCrud($database);
        $req_comment = $comm->readCommentByArticle($id);
        while($comments = $req_comment->fetch())
                {
                    $auteur_comment = new UserCrud($database);
                    $auth = $auteur_comment->getUsernameById($comments['author'])['username'];
                    ?>
        <li>
            <div>
                <div class="comment">
                    <div class="comment-head">
                        <h5 class="author"><?=$auth?></h5>
                        <span><?=$comments['date_comment']?></span>
                    </div>
                    <div class="text-comment">
                    <?=$comments['comment']?>
                    </div             >
                    <?php
                    if (isset($_SESSION['username'])&& strtolower($auth) == strtolower($_SESSION['username'])) {
                        require('controller/editcomment.php');
                        ?>

                        <a class="btnrdmr" href="deletecomment&amp;num=<?=$comments['id']?>">Delete</a>
                        
                        <span id="modifier">Modifier</span>
                        <form action="" method="post" id="edit">
                            <input type="text" name="edit" id="">
                            <input type="hidden" name="id" value="<?=$comments['id']?>">
                            <button type="submit">Valider</button>
                        </form>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </li>

        <?php }?>
    </ul>
</div>