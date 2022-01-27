<?php
    if (!isset($message)) {
        $message="";
    }
    require('controller/connectionadmin.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/style.css">
    <title>My blog</title>
</head>
<body>

    <div class="login-wrap">
        <h2>Admin connection</h2>
        <form action="" method="post">
            <div class="form">
                <input type="text" placeholder="Username" name="username" />
                <input type="password" placeholder="Password" name="pwd" />
                <button value="submit">Connexion </button>
                
             <p class="message"><?=$message?></p></div>
        </form>
    </div>
    
</body>
</html>
