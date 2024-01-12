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
        $wikiId = $this->userWiki->insertWiki($title, $description, $iduser, $category, $date, $img, $tags);


        $this->userWiki->associateTagsWithWiki($wikiId, $tags);
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

    public function wikisDelete($id)
    {
        $this->userWiki->wikisDelete($id);
        $this->displayWikiUser();
    }

    public function modifyWikis()
    {
        $iduser = $_SESSION['id'];
        $img = $_POST['img'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $tags = $_POST['tags'];
        $idWiki = $_POST['idWiki'];

        $this->userWiki->updateWiki($title, $description, $category, $date, $img, $iduser);
        $this->userWiki->deleteAssociateTags($idWiki);
        $this->userWiki->associateTagsWithWiki($idWiki, $tags);
        $this->displayWikiUser();
    }

    public function search_wiki()
    {
        if (isset($_POST['input'])) {
            $input = $_POST['input'];

            $wikis = $this->userWiki->found_wiki($input);

            foreach ($wikis as $wiki) {
                echo '
                    <section id="wikis" class="text-blueGray-700 bg-white ">
                        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row md:justify-around ">
                            <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
                                <img class="object-cover object-center rounded-lg " alt="hero" src="' . URLROOT . '/img/' . $wiki->wiki_picture . '">
                            </div>
                            <div class="flex flex-col items-start mb-16 text-left  md:w-1/3  ">
                                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">' . $wiki->title . '</h1>
                                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 max-h-[25vh] overflow-y-hidden ">' . $wiki->content . '</p>
                                <div class="flex flex-col justify-center lg:flex-row">
                                    <a href="' . URLROOT . '/wikis/read_more/' . $wiki->wiki_id . '" class="flex items-center px-6 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"> Show me </a>
                                    <p class="mt-2 text-sm text-left text-blueGray-600 md:ml-6 md:mt-0"> It will take you to read more <br class="hidden lg:block">
                                        <a href="' . URLROOT . '/wikis/read_more/' . $wiki->wiki_id . '" class="inline-flex items-center font-semibold text-blue-600 md:mb-2 lg:mb-0 hover:text-black " title="read more"> Read more about it Â» </a>
                                    </p>
                                </div>
                                <div class="flex w-full mt-16  justify-around ">
                                    <a href="' . URLROOT . '/wikis/archiver_wiki/' . $wiki->wiki_id . '" class="p-2 bg-red-400  rounded cursor-pointer "><i class="fa-solid fa-box-archive "> ARCHIVER</i></a>
                                    <a href="' . URLROOT . '/wikis/update_wiki/' . $wiki->wiki_id . '" class="p-2 bg-green-400 rounded cursor-pointer "><i class="fa-regular fa-pen-to-square "> UPDATE</i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                ';
            }
        }
    }
}
