<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'isi' => 'v_kategori',
        );
        $this->load->view('pages/v_wrapper', $data, FALSE);
    }

    // Add a new item
    public function add()
    {

    }

    //Update one item
    public function update( $id = NULL )
    {

    }

    //Delete one item
    public function delete( $id = NULL )
    {

    }
}

/* End of file Kategori */


?>