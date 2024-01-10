<?php
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
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
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
            ];

            $this->view('pages/login');
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['img'] = $user->img;
        redirect('pages/member');
    }

    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['img']);
        session_destroy();
        redirect('pages/login');
    }

    public function isLogeIN(){
        if(isset($_SESSION['id'])){
            return true;
        }else{
            return false;
        }
    }
}
