<?php
if (!isset($message)) {
    $message="";
}
require("model/db_connect.php");
require("controller/message.php");

ob_start();

?>
 <div class="login-wrap">
     <h2>Contactez nous</h2>
     <form action="" method="post">
         <div class="form">
             <input type="text" placeholder="Sujet" name="sujet" />
             <textarea name="message" id="msg" cols="30" rows="10"></textarea>
             <button value="submit">Envoyer </button>
             <a href="connexion">
                 <p>Me connecter </p>
             </a>
             <p class="message"><?=$message?></p></div>
     </form>
 </div>
 
<?php $content = ob_get_clean(); ?>
<?php require('view/component/main_template.php');?>