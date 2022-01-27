<nav>
    <div class="logo">
        <h3>My Blog</h3>
    </div>
    <ul class="nav-links">
        <li><a href="accueil">Accueil</a></li>
        <li><a href="contact">Contact</a></li>
        
        <?php
            if (isset($_SESSION['id'])) {
                echo '<li><a href="deconnexion">Deconnection</a></li>';
            }
            else
            {   
                echo '<li><a href="inscription">Inscription</a></li>';
                echo '<li><a href="connexion">Connection</a></li> ';
            }

        ?>
        
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>