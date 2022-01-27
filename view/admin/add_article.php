


<?php ob_start(); 
    require("model/db_connect.php");
    include('model/Article.php');
    include('model/ArticleCrud.php');
    include('model/UserCrud.php');

    
    require('controller/newarticle.php');
?>

    <main id="add">
        <h4>Publier un nouveau article</h4>
        <form action="" method="post">
            <input type="text" name="titre" id="">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <button type="submit">Publier</button>
        </form>
    </main>

<?php $content = ob_get_clean(); ?>
    
<?php require('view/admin/admin_template.php');?>