<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_homePage extends CI_Model
{

    //function menampilkan detail barang
    public function get_all_data()
    {
/*
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori', 'left');
        $this->db->order_by('tb_barang.id_barang', 'desc');
        return $this->db->get()->result();
*/
    }
}




?>