
<?php
    //detroy session for ending connexion
    session_start();
    session_destroy();
    header('Location:accueil');
    exit();
?>
    

