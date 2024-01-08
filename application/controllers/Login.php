<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('level') != "") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Login';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/login');
        $this->load->view('templates/footer');
    }

    public function get_user()
    {
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

        $cek = $this->M_auth->cek_user($username);
        if ($cek) {
            if (password_verify($this->input->post('password'), $cek->password)) {
                $data_session = array(
                    'level' => $cek->level_user,
                    'username' => $cek->username
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('Admin'));
            } else {
                var_dump($cek);
                die();
            }
        } else {
            var_dump($cek);
            die();
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
