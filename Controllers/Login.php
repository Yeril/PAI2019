<?php
require_once './models/User.php';
require_once './Repository/UserRepository.php';
class Login extends Controller
{
    protected $tmp = "login";

    public function __construct()
    {
        parent::__construct();

    }

    public function run()
    {
        $this->view->render($this->tmp);
    }


    public function login()
    {
        $this->model->login();
    }



}