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
    
    public function dashboard_customer()
    {
        $this->load->view('auth/dashboard_customer');
    }
    public function shopping_cart()
    {
        $this->load->view('auth/shopping_cart');
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