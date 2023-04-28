<?php 

class Barang extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this ->load->model('M_barang');
        
    
    }
    public function index() 
    {
        $data['title'] = 'Produk'; 
       $data['barang'] = $this->M_barang->getAllbarang();
        $this->load->view('pages/v_wrapper', $data);
    }
}

?>