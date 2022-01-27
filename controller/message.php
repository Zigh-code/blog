<?php 

//message section
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

    if (isset($_POST['sujet']) && isset($_POST['message'])) {
        $to = "zino8079@gmail.com";
        $subject = $_POST['sujet'] ;

        ini_set("SMTP", "smtp.gmail.com");

        $msg = $_POST['message'] ;
        $from = "FROM :".$_SESSION['username'];
        ini_set("smtp_port", "25");
        mail($to, $subject, $msg, $from);
    }
    
}
else
{
    $message ="Vous devriez vous connecter.";
}
?>
