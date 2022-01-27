<?php ob_start();
if (!isset($message)) {
    $message="";
}   
    require("model/db_connect.php");
    require("controller/cuser.php");

?>
 <div class="login-wrap">
     <h2>Créer un compte</h2>
     <form action="" method="post">
        <div class="form">
             <input type="text" placeholder="Username" name="username" />
             <input type="email" placeholder="Email" name="mail" />
             <input type="password" placeholder="Password" name="pwd" />
             <button value="submit">S'enregistrer </button>
             <p class="message"><?=$message?></p>
        </div>
     </form>
 </div>
<?php $content = ob_get_clean(); ?>
<?php require('view/component/main_template.php');?>