<?php
class Wiki
{
    private $category;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertWiki($title, $content, $iduser, $idcategory, $date, $img)
    {
        $this->db->query("INSERT INTO wikis (title,content,authorId,categoryId,wikiDate,imgWiki) VALUES (:title,:content,:iduser,:idcategory,:date,:img)");
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':iduser', $iduser);
        $this->db->bind(':idcategory', $idcategory);
        $this->db->bind(':date', $date);
        $this->db->bind(':img', $img);
        if ($this->db->execute()) {
            // Get the last inserted ID
            $lastInsertId = $this->db->lastInsertId();
            return $lastInsertId;
        } else {
            return false;
        }
    }


    public function associateTagsWithWiki($wikiId, $tagId)
    {
        // Ensure $tags is an array before proceeding
        if (!is_array($tagId)) {
            // Handle the situation where $tags is not an array (it might be null or something else)
            echo "Invalid tags data.";
            return false;
        }

        foreach ($tagId as $tag) {
            // Assuming your table is named "tags" with columns "tag_id" and "name"
            $this->db->query("INSERT INTO wikitags (wikiId, tagId) VALUES (:wikiId, :tagId)");
            $this->db->bind(':wikiId', $wikiId);
            $this->db->bind(':tagId', $tag);
            $this->db->execute();
        }

        echo "Records inserted successfully.";
    }

    public function getWikis($iduser)
    {
        $this->db->query("SELECT * FROM wikis WHERE authorId = $iduser");
        return $this->db->resultSet();
    }

    public function getAllWikis()
    {
        $this->db->query("SELECT * FROM wikis");
        return $this->db->resultSet();
    }

    public function getAllWikisNot()
    {
        $this->db->query("SELECT * FROM wikis WHERE archiv = 0 ");
        return $this->db->resultSet();
    }

    public function archivWiki($idWiki)
    {
        $this->db->query("UPDATE wikis SET archiv = 1 WHERE wikiId = :idWiki");
        $this->db->bind(':idWiki', $idWiki);
        $this->db->execute();
    }

    public function wikisDelete($idWiki)
    {
        $this->db->query("DELETE FROM wikis WHERE wikiId = :idWiki");
        $this->db->bind(':idWiki',$idWiki);
        $this->db->execute();
    }
}
