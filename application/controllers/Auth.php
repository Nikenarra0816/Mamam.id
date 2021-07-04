<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('m_user');
        $this->load->helper('url');
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
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_user->cek_login("users",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/dashboard"));
 
		}else{
            $this->session->set_flashdata('errors', array('Kombinasi Username dan Password tidak ditemukan'));
            redirect(base_url("index.php/auth/login"));
		}
    }

    public function proses_register()
    {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$password = $this->input->post('password');
 
		$data = array(
			'name' => $name,
			'username' => $username,
			'alamat' => $alamat,
			'telepon' => $telepon,
            'password' => md5($password)
		);
		$this->m_user->input_data($data,'users');
        redirect(base_url("index.php/auth/login"));
    }

    public function logout()
   {
        $this->session->sess_destroy();
        redirect(base_url('index.php/auth/login'));
   }
} 