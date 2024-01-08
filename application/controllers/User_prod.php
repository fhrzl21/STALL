<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_prod extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'STALL - Produksi';

        $this->load->view('templates/header', $data);
        $this->load->view('user_produksi/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user_produksi/dashboard');
        $this->load->view('templates/footer');
    }

    public function lokasi_cylinder()
    {
        $data['title'] = 'STALL - Lokasi Cylinder';

        $this->load->view('templates/header', $data);
        $this->load->view('user_produksi/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user_produksi/list_lokasi_cylinder');
        $this->load->view('templates/footer');
    }

    public function history_pemasangan()
    {
        $data['title'] = 'STALL - Riwayat Pemasangan Cylinder';

        $this->load->view('templates/header', $data);
        $this->load->view('user_produksi/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user_produksi/history_pemasangan');
        $this->load->view('templates/footer');
    }

    public function pemusnahan()
    {
        $data['title'] = 'STALL - Produksi';

        $this->load->view('templates/header', $data);
        $this->load->view('user_produksi/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user_produksi/pemusnahan');
        $this->load->view('templates/footer');
    }
}
