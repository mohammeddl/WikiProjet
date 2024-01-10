<!-- <?php 
class Tags extends Controller {




    public function tags()
    {
        $tag = $_POST['tagName'];
        $result = $this->userModel->insertTags($tag);
        if ($result) {
            $this->view('pages/tags');
        }
    }
} -->