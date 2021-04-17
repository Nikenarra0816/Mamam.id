<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }
    
    public function faq()
    {
        $this->load->view('auth/faq');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function forgot()
    {
        $this->load->view('auth/forgot');
    }

    public function proses_login()
    {
        
    }

    public function proses_register()
    {
        
    }

    public function logout()
   {

   }
} 