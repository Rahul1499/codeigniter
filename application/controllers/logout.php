<?php
class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login/login');

    }
}
