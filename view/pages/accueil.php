<?php ob_start(); ?>
    <?php include("view/component/articles.php")?>
<?php $content = ob_get_clean(); ?>
    
<?php require('view/component/main_template.php');?>