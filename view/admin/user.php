<?php ob_start(); 
    require("model/db_connect.php");
    include('model/UserCrud.php');
?>


<main>

    <?php 

    $rp = new UserCrud($database);
    $user = $rp->getUsers();
    while($utilisateur = $user->fetch())
                {

                    ?>
    <div>
        <h3>Nom   :<?php echo $utilisateur['username']?></h3>
        <p class="content">
            
            Mail    :<?php echo $utilisateur['mail']?> <br>
            Status  :<?php echo $utilisateur['stat']?>
            
        </p>
        <a class="btnrdmr" href="ban&amp;id=<?php echo $utilisateur['id']?>">Bannir</a>
        <hr>
    </div>

    <?php }?>
</main>





<?php $content = ob_get_clean(); ?>
    
<?php require('view/admin/admin_template.php');?>