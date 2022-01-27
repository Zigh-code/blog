<?php 
/*
    cette section se charge du routage de l'URL, 
    elle evite a l'utilisateuer de voir l'architechture de notre site web (chemin, extention fichier etc)...
    ce qui permet d'avoir un URL plus propre
*/

$route="";
if(isset($_GET['route']))
{
    $url= explode('/',$_GET['route']);
    $page = strtolower($url[0]);

    
    if ($page=="deconnexion" ||$page=="deletecomment") {
        $page_route = "controller/".$page.".php";
    }
    
    else if (($page=="add_article" ||$page=="update_article" ||$page=="user") && isset($_SESSION['stat']) && $_SESSION['stat']=="isAdmin"){
        $page_route = "view/admin/".$page.".php";
    } 
    else if (($page=="delete"||$page=="ban") && isset($_SESSION['stat'])&& $_SESSION['stat']=="isAdmin"){
        $page_route = "controller/".$page.".php";
    }
    else if ($page=="admin") {
        if (isset($_SESSION['stat']) && $_SESSION['stat']=="isAdmin") {
            $page_route = "view/admin/home.php";
        }
        else {
            $page_route = "view/admin/connection.php";
        }
    }
    else {
        $page_route = "view/pages/".$page.".php";
    }

    
    
    if (file_exists($page_route)) {
        include($page_route);
    }
    else {
        
        header('HTTP/1.0 404 Not Found');
        require('view/pages/error_client.php');
    }

}
else{
    require("view/pages/accueil.php");
}
?>