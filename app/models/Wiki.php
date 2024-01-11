<?php
class Wiki
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
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


    public function getAllWikis(){
        $this->db->query("SELECT * FROM wikis");
        return $this->db->resultSet();
    }

}
