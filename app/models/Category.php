<?php
class Category
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
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
}
