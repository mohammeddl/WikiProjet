<?php

class Categorys extends Controller {


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
        $this->view('pages/categorie');
    }

    public function displayCategory()
    {
        $category = $this->userCategory->getCategory();
        $this->view('pages/categorie', $category);
    }
}