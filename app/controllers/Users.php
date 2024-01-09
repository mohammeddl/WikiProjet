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

    // public function login()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    //     } else {
    //         $data = [
    //             'email' => '',
    //             'password' => '',
    //         ];

    //         $this->view('pages/login', $data);
    //     }
    // }


}
