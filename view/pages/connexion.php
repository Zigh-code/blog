<?php
if (!isset($message)) {
    $message="";
}
require("model/db_connect.php");
require("controller/connection.php");

ob_start();

?>
 <div class="login-wrap">
     <h2>Se connecter</h2>
     <form action="" method="post">
         <div class="form">
             <input type="text" placeholder="Username" name="username" />
             <input type="password" placeholder="Password" name="pwd" />
             <button value="submit">Connexion </button>
             <a href="inscription">
                 <p>J'ai pas de compte? S'enregistrer </p>
                 
             </a>
             <p class="message"><?=$message?></p></div>
     </form>
 </div>
 
<?php $content = ob_get_clean(); ?>
<?php require('view/component/main_template.php');?>