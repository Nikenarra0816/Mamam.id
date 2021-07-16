<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_menu extends CI_Model {

    private $_table = "menus";
    
    public $menuid;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["menuid" => $id])->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    
    public function update($where, $data)
    {
        $this->db->where($where);
        return $this->db->update($this->_table,$data);
    }
    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("menuid" => $id));
    }

}

/* End of file ModelName.php */
