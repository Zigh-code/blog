<?php 
//Cette classe permet de manipuler les elements commentaires 

class Comment {
    private $article;
    private $author;
    private $content; 
    private $id;
    private $date;
    
    public function __construct(array $data){
        if (isset($data['id'])&&isset($data['id_article'])&&isset($data['comment'])&&isset($data['date_comment'])&&isset($data['author'])) {
          
            $this->setId($data['id']);
            $this->setAuthor($data['author']);
            $this->setContent($data['comment']);
            $this->setArticle($data['id_article']);
            $this->setDate($data['date']);
        }
    }


    public function getContent(){
        return $this->content;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getArticle(){
        return $this->article;
    }
    public function getDate(){
        return $this->date;

    }
    public function getId(){
        return $this->id;
    }

    /*---------------Setters--------------------*/

    public function setAuthor($auteur){
        return $this->author = $auteur;
    }

    public function setContent($comment){
        return $this->content = $comment;
    }
    public function setArticle($article){
        return $this->article =$article;
    }
    public function setDate($date){
        return $this->date = $date;

    }
    public function setId($id){
        return $this->id = $id;
    }

}

?>