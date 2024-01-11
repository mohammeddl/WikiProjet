<?php
class Tags extends Controller
{

    private $userTag;

    public function __construct()
    {
        $this->userTag = $this->model('Tag');
    }

    public function tags()
    {
        $tag = $_POST['tagName'];
        $this->userTag->insertTags($tag);
        $this->displayTags();
    }


    public function displayTags()
    {
        $tags = $this->userTag->getTags();

        $this->view('pages/tags', $tags);
    }


    public function modifyTag()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tagId = $_POST['idTag'];
            $newTagName = $_POST['newTagName']; // Assuming you have a form field for the new tag name

            // Call a method from your model to update the tag
            $this->userTag->updateTag($tagId, $newTagName);
        }

        // Redirect to the tags page or wherever you want to go after modification
        header("Location: /tags");
    }

    public function deleteTag()
    {
        $idTag = $_POST['idTag'];
        $this->userTag->deleteTag($idTag);
        $this->displayTags();
    }
}
