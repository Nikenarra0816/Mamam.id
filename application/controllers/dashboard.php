<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
        $this->load->model('m_menu');
    }

    public function index()
    {
        if ($this->session->userdata('isadmin') == '1') {
            $this->load->view('main/dashboard_admin');
        } else {
            $data['content'] = "dashboards/client/subcontent/create_new_project";
        }
    }

    public function addMenu()
    {
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $description = $this->input->post('description');

        if ($name == '') {
            $result['pesan'] = "Nama harus diisi";
        } elseif ($price == 0) {
            $result['pesan'] = "Masa Gratis?";
        } else {
            $result['pesan'] = "";

            $data = array(
                'name' => $name,
                'price' => $price,
                'description' => $description
            );

            $this->m_menu->save($data, 'siswa');
        }

        echo json_encode($result);
    }

    function editMenu()
    {
        $menuid = $this->input->post('menuid');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $description = $this->input->post('description');

        if ($name == '') {
            $result['pesan'] = "Nama harus diisi";
        } elseif ($price == 0) {
            $result['pesan'] = "Masa Gratis?";
        } else {
            $result['pesan'] = "";

            $where = array('menuid' => $menuid);

            $data = array(
                'name' => $name,
                'price' => $price,
                'description' => $description
            );

            $this->m_menu->update($where, $data);
        }
        echo json_encode($result);
    }



    function getMenu()
    {
        $menus = $this->m_menu->getAll();
        echo json_encode($menus);
    }

    function ambilMenu()
    {
        $menuid = $this->input->post('menuid');
        $menu = $this->m_menu->getById($menuid);
        echo json_encode($menu);
    }

    function hapusData()
    {
        $menuid = $this->input->post('menuid');
        $del = $this->m_menu->delete($menuid);
        $result['pesan'] = 'Berhasil';
        echo json_encode($result);
    }
}
