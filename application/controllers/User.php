<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'STALL - Watermark';

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/dashboard');
        $this->load->view('templates/footer');
    }

    public function cylinder_user()
    {
        $data['title'] = 'STALL - Cylinder';

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/cylinder');
        $this->load->view('templates/footer');
    }

    public function cover_user()
    {
        $data['title'] = 'STALL - Cover';

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/cover');
        $this->load->view('templates/footer');
    }

    public function master_dice_user()
    {
        $data['title'] = 'STALL - Cover';

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/master_dice');
        $this->load->view('templates/footer');
    }

    public function pengiriman()
    {
        $data['title'] = 'STALL - Pengiriman';

        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/pengiriman');
        $this->load->view('templates/footer');
    }
}
