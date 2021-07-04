<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}

/* End of file m_user.php */

?>