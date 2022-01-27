<?php
class UserCrud{
    private $db;

    public function __construct($database){
        $this->setDb($database);
    }


    public function createUser($username,$password,$email,$stat){
        $sql = "INSERT INTO user(username, passwrd, mail, stat) VALUE (?,?,?,?)";
        $req = $this->db->prepare($sql);
        $req->execute(array($username,$password,$email,$stat));

    }
    public function getUserByUsername($username){
        $sql = "SELECT id,passwrd,stat FROM user WHERE username=?";
        $rp = $this->db->prepare($sql);
        $rp->execute(array($username));
        return $rp->fetch();
    }
    public function getUsers(){
        $sql = "SELECT id,mail,username,stat FROM user WHERE stat!='isAdmin'";
        $rp = $this->db->query($sql);
        return $rp;
    }
    public function getIdUser($username){
        $sql = "SELECT id FROM user WHERE username = ?";
        $rp = $this->db->prepare($sql);
        $rp->execute(array($username));
        return  $rp->fetch();
    }
    public function getUsernameById($id){
        $sql = "SELECT username FROM user WHERE id = ?";
        $rp = $this->db->prepare($sql);
        $rp->execute(array($id));
        return  $rp->fetch();
    }

    public function exist($user){
        $val = FALSE;
        $sql = "SELECT username FROM user WHERE username=?";
        $req = $this->db->prepare($sql);
        $req->execute(array($user));
        if($req->fetch()){
            $val = TRUE;
        }
        return $val;
    }
    public function getUserAdminByUsername($username){
        $sql = "SELECT id,passwrd FROM user WHERE username=? AND stat='isAdmin'";
        $rp = $this->db->prepare($sql);
        $rp->execute(array($username));
        return $rp->fetch();
    }

    public function  bannedUser($id){

        $sql = "UPDATE user SET stat='isBanned' WHERE id=?";
        $req = $this->db->prepare($sql);
        $req->execute(array($id));


        
    }

    public function setDb($database){
        $this->db = $database;
    }



    
}