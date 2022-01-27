<?php
class CommentCrud{
    private $db;

    public function __construct($database){
        $this->setDb($database);
    }


    public function createComment($username,$id_article,$commentaire){
        $sql = "INSERT INTO comments(id_article, author, comment, date_comment) VALUE (?,?,?,NOW())";
        $req = $this->db->prepare($sql);
        $req->execute(array($id_article,$username,$commentaire));

    }
    public function readCommentByArticle($id_art){
        $sql = "SELECT * FROM comments WHERE id_article = ? ORDER BY date_comment DESC";
        $req = $this->db->prepare($sql);
        $req->execute(array($id_art));
        return $req;

    }
    public function updateComment($content,$id){
        $sql = "UPDATE comments SET comment=? WHERE id=?";
        $req = $this->db->prepare($sql);
        $req->execute(array($content,$id)); 
        
    }
    public function articleByComment($id){
        $sql = "SELECT id_article FROM comments WHERE id = ?";
        $req = $this->db->prepare($sql);
        $req->execute(array($id));
        return $req->fetch()['id_article'];

    }


    public function  deleteComment ($id){
        $sql = 'DELETE FROM comments WHERE id=?';
        $req = $this->db->prepare($sql);
        $req->execute(array($id));  
    }
    /*public function  deleteCommentByAuthor ($author){
        $sql = 'DELETE FROM comments WHERE author=?';
        $req = $this->db->prepare($sql);
        $req->execute(array($author));  
    }*/
 
    public function setDb($database){
        $this->db = $database;
    }
    
}