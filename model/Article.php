<?php 
//Cette classe permet de manipuler les elements articles

class Article {
    private $pub_date;
    private $id;
    private $content; 
    private $author;
    private $title;
    
    public function __construct(array $data){
        if (isset($data['id'])&&isset($data['title'])&&isset($data['content'])&&isset($data['pub_date'])&&isset($data['author'])) {
          
            $this->setId($data['id']);
            $this->setAuthor($data['author']);
            $this->setContent($data['content']);
            $this->setTitle($data['title']);
            $this->setDate($data['pub_date']);
        }
    }


    public function getContent(){
        return $this->content;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDate(){
        return $this->pub_date;

    }
    public function getId(){
        return $this->id;
    }

    /*---------------Setters--------------------*/

    public function setAuthor($auteur){
        return $this->author = $auteur;
    }

    public function setContent($texte){
        return $this->content = $texte;
    }
    public function setTitle($titre){
        return $this->title =$titre;
    }
    public function setDate($date){
        return $this->pub_date = $date;

    }
    public function setId($id){
        return $this->id = $id;
    }

}

?>