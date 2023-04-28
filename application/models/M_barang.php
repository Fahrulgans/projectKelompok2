<?php 

class M_barang extends CI_Model {

    public function getAllbarang() {
        return $this->db->get('tb_barang')->result_array();
        
        
    }
    
}

?>