<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomePage extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_homepage');
    }
    
    public function index()
    { 
        $data = array(
            'title' => 'Home Page',
           // 'barang' => $this->m_homepage->get_all_data(),
            'isi' => 'v_homePage',
        );
        $this->load->view('pages/v_wrapper', $data, FALSE);
    }

}

/* End of file TampilanWeb.php */



?>