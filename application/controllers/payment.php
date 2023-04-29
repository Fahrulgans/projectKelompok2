<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Payment extends CI_Controller {
    public function index() {
        $this->load->view('form_payment');
    }

    public function process() {
        //lakukan validasi input disini, seperti cek apakah field sudah diisi atau tidak

        //ambil data dari form
        $this->load->model(['Bank']);
        $data = [
            'name' => $this->input->post('name'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('kode_pos'),
            'total_produk'=> $this->input->post('total_produk'),
            'total_harga' => $this->input->post('total_harga'),
            'pilih_bank' => $this->input->post('pilih_bank'),
            'virtual_account' => $this->Bank->getVA($this->input->post('pilih_bank'))
        ];

        //lakukan proses pembayaran disini, seperti kirim data ke API pembayaran

        //tampilkan halaman hasil pembayaran
        $this->load->view('hasil_pembayaran', $data);
    }

}


