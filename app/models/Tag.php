<?php 
class Tag
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
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

public function updateTag($tagId, $newTagName)
{
    $this->db->query("UPDATE tags SET tagName = :newTagName WHERE categoryId = :tagId");
    $this->db->bind(':newTagName', $newTagName);
    $this->db->bind(':tagId', $tagId);
    $this->db->execute();
}

public function deleteTag($tagId)
{
    $this->db->query("DELETE FROM tags WHERE tagId = :tagId");
    $this->db->bind(':tagId', $tagId);
    $this->db->execute();
}

}