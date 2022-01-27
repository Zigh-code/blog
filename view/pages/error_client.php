<?php ob_start(); ?>
    <div class="erreur">
        <h3>Erreur 404</h3>
        <br>
        Page introuvable
    </div>
<?php $content = ob_get_clean(); ?>

    
<?php require('view/component/main_template.php');?>