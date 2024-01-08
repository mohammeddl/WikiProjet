<?php
  class Pages extends Controller {
    public function __construct(){

    }
    
    public function index(){
      $data = [
        'title' => 'Welcome'
      ];
     
      $this->view('pages/index', $data);
    }

    public function create(){

      $this->view('pages/create');
    }

    public function login(){

      $this->view('pages/login');
    }

    public function member(){
      $this->view('pages/member');
    }

    public function dashboard(){

      $this->view('pages/dashboard');
    }

  }