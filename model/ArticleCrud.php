<?php
//Cette classe permet de manipuler la table article de la base de donnee 

class ArticleCrud{
    private $db;

    public function __construct($database){
        $this->setDb($database);
    }

    //creer un article
    public function createArticle( $_author, $_content , $_title){

        $sql = "INSERT INTO article(author, content , title , pub_date) VALUE (?,?,?,NOW())";
        $req = $this->db->prepare($sql);
        $req->execute(array($_author,$_content,$_title));

    }
     //lire un article en utilisant son id
    public function readArticleById($id_art){
        $sql = "SELECT * FROM article WHERE id = ?";
        $req = $this->db->prepare($sql);
        $req->execute(array($id_art));

        if ($retour = $req->fetch()) {
          return $retour; 
        }
        //si il n y a pas d article avec cet id on envoie une erreur 404
        else{
            header('HTTP/1.0 404 Not Found');
            header('Location:error_client');
            exit();
        }
    }
    //trouver tout les articles
    public function findArticles(){
        $sql = "SELECT * FROM article";
        $req = $this->db->query($sql);
        return $req;
    }

    //modifier un article
    public function updateArticle($titre,$contenu,$id){
        $sql = "UPDATE article SET title=? , content=? WHERE id=?";
        $req = $this->db->prepare($sql);
        $req->execute(array($titre,$contenu,$id));
        
    }

    //supprimer un article
    public function  deleteArticle ($id){
        $sql = 'DELETE FROM article WHERE id=?';
        $req = $this->db->prepare($sql);
        $req->execute(array($id));
        
    }
    //mettre la base de donnee
    public function setDb($database){
        $this->db = $database;
    }
}