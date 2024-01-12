<?php
class Users extends Controller
{
    private $userModel;
    private $userWiki;
    private $category;
    private $tags;
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->userWiki = $this->model('Wiki');
        $this->category = $this->model('Category');
        $this->tags = $this->model('Tag');
    }

    public function index()
    {
        $this->view('pages/index');
    }

    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'img' => trim($_POST['img']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];

            if (empty($data['img'])) {
                $data['imgErr'] = 'Please enter img';
            }

            if (empty($data['name'])) {
                $data['nameErr'] = 'Please enter name';
            }

            if (empty($data['email'])) {
                $data['emailErr'] = 'Please enter email';
            } else {
                if ($this->userModel->findUserEmail($data['email'])) {
                    $data['emailErr'] = 'Email is already taken';
                }
            }

            if (empty($data['password'])) {
                $data['passwordErr'] = 'Please enter password';
            }


            if (empty($data['imgErr']) && empty($data['nameErr']) && empty($data['emailErr']) && empty($data['passwordErr'])) {

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($this->userModel->register($data)) {
                    redirect('register_success', 'You are registered and can log in');
                    redirect('pages/login');
                } else {
                    die('something went wrong');
                }
            } else {
                $this->view('pages/create', $data);
            }
        } else {
            $data = [
                'img' => '',
                'name' => '',
                'email' => '',
                'password' => '',
            ];
            $this->view('pages/create', $data);
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];
            $loggedUser = $this->userModel->login($data['email'], $data['password']);
            if ($loggedUser) {
                $this->createUserSession($loggedUser);
                switch ($_SESSION['role']) {
                    case "author":
                        $_SESSION['role'] = 'author';
                        $this->displayWikiUser();
                        exit;
                    case "admin":
                        $_SESSION['role'] = 'admin';
                        $data = $this->userWiki->getAllWikisNot();
                        $this->view('pages/dashboard', $data);
                        exit;
                }
            } else {
                $this->view('pages/login');
            }
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['img'] = $user->img;
        $_SESSION['role'] = $user->role;
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['img']);
        unset($_SESSION['admin']);
        session_destroy();
        redirect('pages/login');
    }

    public function isLogeIN()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            return false;
        }
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
}
