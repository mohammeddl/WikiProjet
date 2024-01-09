<?php
class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data){
        $this->db->query("INSERT INTO users (name, email, password, img) VALUES(:name, :email, :password, :img )");
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':name',$data['email']);
        $this->db->bind(':name',$data['password']);
        $this->db->bind(':name',$data['img']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function findUserEmail($email)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
