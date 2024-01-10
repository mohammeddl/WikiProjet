<?php
class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query("INSERT INTO users (name, email, password, img) VALUES(:name, :email, :password, :img )");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':img', $data['img']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function login($email, $password)
{
    $this->db->query("SELECT * FROM users WHERE email = :email");
    $this->db->bind(':email', $email);
    $row = $this->db->single();

    if ($row) {
        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false; 
        }
    } else {
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

    public function insertTags($tag)
    {
        $this->db->query("INSERT INTO tags (tagName) VALUES (:tag)");
        $this->db->bind(':tag', $tag);
        $this->db->execute();
    }

    public function getTags()
{
    $this->db->query("SELECT * FROM tags");
    
    return $this->db->resultSet();
}

public function insertCategory($name, $img)
{
    $this->db->query("INSERT INTO categories (categoryName, categoryImg) VALUES (:name,:img)");
    $this->db->bind(':name', $name);
    $this->db->bind(':img', $img);
    $this->db->execute();
}

public function getCategory()
{
    $this->db->query("SELECT * FROM categories");
    
    return $this->db->resultSet();
}

public function insertWiki($title,$content,$iduser,$date,$img){
    $this->db->query("INSERT INTO wikis (title,content,authorId,wikiDate,imgWiki) VALUES (:title,:content,:iduser,:date,:img)");
    $this->db->bind(':title', $title);
    $this->db->bind(':content',$content);
    $this->db->bind(':iduser',$iduser);
    // $this->db->bind(':idcategory', $idcategory);
    $this->db->bind(':date',$date);
    $this->db->bind(':img',$img);
    $this->db->execute();
}

public function getWikis($iduser){
$this->db->query("SELECT * FROM wikis WHERE authorId = $iduser");
return $this->db->resultSet();
}

}
