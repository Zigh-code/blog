

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/admin_style.css">
    <title>My blog</title>
</head>
<body>
<nav id=admin_menu>
    <div class="logo">
        <h3>My blog</h3>
    </div>
    <ul class="nav-links">
        <li><a class="nav-link" href="add_article">Ajouter article</a></li>
        <li><a class="nav-link" href="admin">Modifier article</a></li>
        <li><a class="nav-link" href="admin">Suprimer article</a></li>
        <li><a class="nav-link" href="user">Utilisateur</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>

    <?= $content ?>
    
    <script src="view/style/menu.js"></script>
</body>
</html>
