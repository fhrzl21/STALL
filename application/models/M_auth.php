<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_auth extends CI_Model
{
    public function cek_user($username)
    {
        $kondisi = array(
            'username' => $username
        );
        $this->db->select('user.*');
        $this->db->where($kondisi);
        $this->db->limit(1);
        return $this->db->get('user')->row();
    }
}
