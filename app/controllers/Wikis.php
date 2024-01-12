<?php
class Wikis extends Controller
{

    private $userWiki;
    private $category;
    private $tags;

    public function __construct()
    {
        $this->userWiki = $this->model('Wiki');
        $this->category = $this->model('Category');
        $this->tags = $this->model('Tag');
    }

    public function addWiki()
    {
        $iduser = $_SESSION['id'];
        $img = $_POST['img'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $tags = $_POST['tags'];

        if (empty($tags)) {
            echo "Please choose at least one tag.";
            exit;
        }
        $wikiId=$this->userWiki->insertWiki($title, $description, $iduser, $category, $date, $img, $tags);
        
        
        $this->userWiki->associateTagsWithWiki($wikiId,$tags);
        $this->displayWikiUser();
    
        $this->view('pages/member');
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

    public function displayWikiUser()
    {
        $wiki = $this->userWiki->getWikis($_SESSION['id']);
        $category = $this->category->getCategory();
        $tags = $this->tags->getTags();
        $data = [
            'wiki' => $wiki,
            'category' => $category,
            'tags' => $tags
        ];
        $this->view('pages/member', $data);
    }


    public function wikisDelete($id){
        $this->userWiki->wikisDelete($id);
        $this->displayWikiUser();
    }

}
