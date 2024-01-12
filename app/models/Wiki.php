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
            $lastInsertId = $this->db->lastInsertId();
            return $lastInsertId;
        } else {
            return false;
        }
    }

    public function updateWiki($title, $content, $idcategory, $date, $img, $idWiki)
    {
        $this->db->query("UPDATE wikis SET title = :title, content = :content, categoryId = :idcategory, wikiDate = :date, imgWiki = :img  WHERE wikiId = :idWiki");
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':idcategory', $idcategory);
        $this->db->bind(':date', $date);
        $this->db->bind(':img', $img);
        $this->db->bind(':idWiki', $idWiki);
        $this->db->execute();
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

        echo "<div class='flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800'>
        <div class='flex items-center justify-center w-12 bg-emerald-500'>
            <svg class='w-6 h-6 text-white fill-current' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'>
                <path d='M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z' />
            </svg>
        </div>
    
        <div class='px-4 py-2 -mx-3'>
            <div class='mx-3'>
                <span class='font-semibold text-emerald-500 dark:text-emerald-400'>Success</span>
                <p class='text-sm text-gray-600 dark:text-gray-200'>Your account was registered!</p>
            </div>
        </div>
    </div>";

    }

    public function deleteAssociateTags($wikiId)
    {
        $this->db->query("DELETE FROM wikitags WHERE wikiId = :wikiId");
        $this->db->bind(':wikiId', $wikiId);
        $this->db->execute();
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
        $this->db->bind(':idWiki', $idWiki);
        $this->db->execute();
    }

    public function found_wiki($input)
    {

        try {
            $this->db->query("SELECT categories.categoryName AS category, GROUP_CONCAT(tags.tagName) AS tags, wikis.*
            FROM wikis
            LEFT JOIN categories ON wikis.categoryId = categories.categoryId
            LEFT JOIN wikitags ON wikis.wikiId = wikitags.wikiId
            LEFT JOIN tags ON wikitags.tagId = tags.tagId
            WHERE (wikis.title LIKE '%{$input}%' OR categories.categoryName LIKE '%{$input}%' OR tags.tagName LIKE '%{$input}%') and wikis.archiv = 1
            GROUP BY wikis.wikiId;
        ");
            $this->db->execute();
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
