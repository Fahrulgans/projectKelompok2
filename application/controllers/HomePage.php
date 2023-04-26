<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomePage extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Home Page',
            'isi' => 'v_homePage',
        );
        $this->load->view('pages/v_wrapper', $data, FALSE);
    }

}

/* End of file TampilanWeb.php */



?>