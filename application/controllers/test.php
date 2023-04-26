<?php
class test extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['page'] = "singlePageProduct";
        $this->load->view('singlePage', $data);
    }
    
}
?>