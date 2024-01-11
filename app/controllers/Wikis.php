<?php
class Wikis extends Controller
{

    private $userWiki;

    public function __construct()
    {
        $this->userWiki = $this->model('Wiki');
    }


    public function wikis()
    {
        $iduser = $_SESSION['id'];
        $img = $_POST['img'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        $this->userWiki->insertWiki($title, $description, $iduser, $date, $img);
        $this->view('pages/member');
    }

    public function displayWikiUser()
    {
        $wiki = $this->userWiki->getWikis($_SESSION['id']);
        $this->view('pages/member', $wiki);
    }

    public function displayAll()
    {
        $wiki = $this->userWiki->getAllWikis();
        $this->view('pages/index', $wiki);
    }

    public function displayWikisArchiv()
    {
        $archiv = $this->userWiki->getAllWikisNot();
        $this->view('pages/dashboard', $archiv);
    }

    public function archivWikis($id)
    {
        $this->userWiki->archivWiki($id);
        $this->displayWikisArchiv();
    }
}
