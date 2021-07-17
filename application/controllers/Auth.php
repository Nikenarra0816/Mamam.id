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
        $this->load->helper('form');
        $this->load->helper('url');    
        $this->load->library('form_validation'); 

        $this->form_validation->set_rules('name', 'Name', 'required', 
        array('required' => '%s harus diisi.'));    
        $this->form_validation->set_rules('username', 'Email', 'required',            
        array('required' => '%s harus diisi.'));    
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',
        array('required' => '%s harus diisi.')); 
        $this->form_validation->set_rules('password', 'Password', 'required', 
        array('required' => '%s harus diisi.')); 

        if ($this->form_validation->run() == FALSE)    
        {             
            $this->load->view('auth/register');          
        } else {    
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
		$data = $this->m_user->cek_login("users",$where)->row();
		if($cek > 0){
			$data_session = array(
                'id' => $data->id,
				'nama' => $username,
				'status' => "login",
                'isadmin' => $data->isadmin
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
       
       
    }

    public function logout()
   {
        $this->session->sess_destroy();
        redirect(base_url('index.php/auth/login'));
   }
} 