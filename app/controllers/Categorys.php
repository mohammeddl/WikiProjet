<?php

class Categorys extends Controller
{


    private $userCategory;

    public function __construct()
    {
        $this->userCategory = $this->model('Category');
    }

    public function categorie()
    {
        $img = $_POST['img'];
        $name = $_POST['name'];
        $this->userCategory->insertCategory($name, $img);
        $this->displayCategory();
    }

    public function displayCategory()
    {
        $category = $this->userCategory->getCategory();
        $this->view('pages/categorie', $category);
    }

    public function deleteCategorys($id)
    {
        $this->userCategory->deleteCategory($id);
        $this->displayCategory();
    }

    public function modifyCategoty()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoryId = $_POST['idTag'];
            $newTagName = $_POST['newTagName']; 
            $img = $_POST['imgCategory'];
            $this->userCategory->updateCategoy($categoryId,$newTagName, $img);
            $this->displayCategory();
        }
    }
}
