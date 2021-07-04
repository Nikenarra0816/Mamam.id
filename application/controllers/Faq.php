<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Faq extends CI_Controller {
    
        public function index()
        {
            $this->load->view('auth/faq');
        }
    
    }
    
    /* End of file Faq.php */
    
?>