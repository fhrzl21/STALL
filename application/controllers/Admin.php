<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('url');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') == "") {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['title'] = 'STALL - Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/footer');
    }

    // ----------------------------- Awal fungsi cylinder -----------------------------

    public function list_cylinder()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Cylinder';
        $data['cylinder'] = $this->M_admin->get_All();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_cylinder');
        $this->load->view('templates/footer');
    }

    public function tambah_cylinder()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Tambah Cylinder';
        $data['cover'] = $this->M_admin->get_All_cover();
        $data['master_dies'] = $this->M_admin->get_All_dice();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_cylinder');
        $this->load->view('templates/footer');
    }

    public function detail_cylinder($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Detail Cylinder';
        $data['cylinder'] = $this->M_admin->cylinder_detail($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/detail_cylinder');
        $this->load->view('templates/footer');
    }

    public function edit_cylinder($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        // $data['memo'] = $this->M_memo->get_All($id_memo);
        $data['title'] = 'STALL - Edit Cylinder';
        $data['cylinder'] = $this->M_admin->cylinder_detail($id)->row();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit_cylinder');
        $this->load->view('templates/footer');
    }

    public function cylinder_add_proses()
    {
        $this->M_admin->proses_add_cylinder();
        // $this->session->set_flashdata('msg', 'Memo sudah terkirim, Untuk Konfirmasi harap hubungi Ext 154');
        redirect('Admin/list_cylinder');
    }

    public function cylinder_delete($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $where = array('cylinder_id ' => $id);
        $this->M_admin->delete_cylinder($where, 'cylinder');
        redirect('Admin/list_cylinder');
    }

    public function cylinder_update_proses()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->update_cylinder();
        redirect('Admin/list_cylinder');
    }

    // ----------------------------- Akhir fungsi cylinder -----------------------------

    // ----------------------------- Awal fungsi Cover -----------------------------

    public function list_cover()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Cover';
        $data['cover'] = $this->M_admin->get_All_cover();
        $data['master_dies'] = $this->M_admin->get_All_dice();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_cover');
        $this->load->view('templates/footer');
    }

    public function tambah_cover()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Tambah Cover';
        $data['master_dies'] = $this->M_admin->filter_dies();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_cover');
        $this->load->view('templates/footer');
    }

    public function detail_cover($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Detail Cover';
        $data['cover'] = $this->M_admin->cover_detail($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/detail_cover');
        $this->load->view('templates/footer');
    }

    public function edit_cover($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Edit Cover';
        $data['cover'] = $this->M_admin->cover_detail($id)->row();
        $data['master_dies'] = $this->M_admin->get_All_dice();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit_cover');
        $this->load->view('templates/footer');
    }
    public function cover_add_proses()
    {
        $this->M_admin->proses_add_cover();

        // $this->session->set_flashdata('msg', 'Memo sudah terkirim, Untuk Konfirmasi harap hubungi Ext 154');
        redirect('Admin/list_cover');
    }

    public function cover_update_proses()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->update_cover();
        redirect('Admin/list_cover');
    }

    public function cover_delete($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $where = array('cover_id ' => $id);
        $this->M_admin->delete_cover($where, 'cover');
        redirect('Admin/list_cover');
    }

    // ----------------------------- Akhir fungsi Cover -----------------------------

    // ----------------------------- Awal fungsi master dice -----------------------------

    public function list_master_dice()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Master Dice';
        $data['master_dies'] = $this->M_admin->get_All_dice();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_master_dice');
        $this->load->view('templates/footer');
    }

    public function tambah_master_dice()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Tambah Master Dice';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_master_dice');
        $this->load->view('templates/footer');
    }

    public function detail_master_dice($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Detail Master Dice';
        $data['master_dies'] = $this->M_admin->dice_detail($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/detail_dice');
        $this->load->view('templates/footer');
    }

    public function edit_dice($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        // $data['memo'] = $this->M_memo->get_All($id_memo);
        $data['title'] = 'STALL - Edit Master Dice';
        $data['master_dies'] = $this->M_admin->get_All_dice();
        $data['master_dies'] = $this->M_admin->dice_detail($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit_master_dice');
        $this->load->view('templates/footer');
    }

    public function dice_add_proses()
    {
        $this->M_admin->proses_add_dice();
        // $this->session->set_flashdata('msg', 'Memo sudah terkirim, Untuk Konfirmasi harap hubungi Ext 154');
        redirect('Admin/list_master_dice');
    }

    public function dice_update_proses()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->update_dice();
        redirect('Admin/list_master_dice');
    }

    public function dice_delete($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $where = array('master_dies_id  ' => $id);
        $this->M_admin->delete_dice($where, 'master_dies');
        redirect('Admin/list_master_dice');
    }

    // ----------------------------- Akhir fungsi master dice -----------------------------

    // ----------------------------- Awal fungsi Pemasangan Cover -----------------------------

    public function list_pasang_cover()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Pasang cover cylinder';
        // $data['log_pemasangan_cover_cylinder'] = $this->M_admin->get_all_history_cover_cylinder();
        $data['log_pemasangan_cover_cylinder'] = $this->M_admin->filter_list_pemasangan_cylinder_cover();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_pasang_cover');
        $this->load->view('templates/footer');
    }

    public function add_pasang_cover()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Pasang cover cylinder';
        $data['cylinder'] = $this->M_admin->get_All_cylinder_status();
        $data['cover'] = $this->M_admin->get_All_cover_status();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_pasang_cover');
        $this->load->view('templates/footer');
    }

    public function edit_pasang_cover($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        // $data['memo'] = $this->M_memo->get_All($id_memo);
        $data['title'] = 'STALL - Edit Pasang Cover';
        $data['log_pemasangan_cover_cylinder'] = $this->M_admin->pasang_cover_detail($id)->row();
        $data['cylinder'] = $this->M_admin->get_All();
        $data['cover'] = $this->M_admin->get_All_cover();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit_pasang_cover');
        $this->load->view('templates/footer');
    }

    public function pasangCvr_add_proses()
    {
        $this->M_admin->proses_add_pasangCvr();
        // $this->session->set_flashdata('msg', 'Memo sudah terkirim, Untuk Konfirmasi harap hubungi Ext 154');
        redirect('Admin/list_pasang_cover');
    }

    public function pasang_cover_update_proses()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->update_pasang_cover();
        redirect('Admin/list_pasang_cover');
    }

    // ----------------------------- Akhir fungsi Pemasangan Cover -----------------------------

    // ----------------------------- Awal fungsi Pelepasan Cover -----------------------------

    public function list_pelepasan_cover()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Pelepasan cover cylinder';
        $data['log_pemasangan_cover_cylinder'] = $this->M_admin->filter_list_pelepasan_cylinder_cover();
        $data['pemasangan_cylinder_mesin'] = $this->M_admin->get_all_pemasangan_cylinderMesin_new1();
        $data['cylinder'] = $this->M_admin->get_All_cylinder_status_terpasang();
        $data['cover'] = $this->M_admin->get_All_cover_status_terpasang();
        // $data['cover'] = $this->M_admin->filter_pelepasan_cover_cylinder();
        $data['gudang'] = $this->M_admin->get_all_gudang_pm10();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_pelepasan_cover');
        $this->load->view('templates/footer');
    }

    // public function add_pelepasan_cover($id)
    // {
    //     $data['title'] = 'STALL - Pelepasan cover cylinder';
    //     $data['log_pemasangan_cover_cylinder'] = $this->M_admin->pasang_cover_detail($id)->row();
    //     $data['cylinder'] = $this->M_admin->get_All_cylinder_status_terpasang();
    //     $data['cover'] = $this->M_admin->get_All_cover_status_terpasang();
    //     $data['gudang'] = $this->M_admin->get_all_gudang_pm10();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('admin/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('admin/add_pelepasan_cover');
    //     $this->load->view('templates/footer');
    // }

    public function lepas_cover_proses($id, $cover_id, $cylinder_id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->lepas_cover($id, $cover_id, $cylinder_id);
        redirect('Admin/list_pelepasan_cover');
    }
    // ----------------------------- Akhir fungsi Pelepasan Cover -----------------------------

    // ----------------------------- Awal fungsi Validasi QC PM 10-----------------------------

    public function list_validasi_pm10()
    {
        if ($this->session->userdata('username') != "qc10" && $this->session->userdata('username') != "admin") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Validasi QC PM10';
        // $data['master_dies'] = $this->M_admin->get_All_dice();
        // $data['log_pemasangan_cover_cylinder'] = $this->M_admin->get_all_history_cover_cylinder();
        $data['log_pemasangan_cover_cylinder'] = $this->M_admin->filter_list_pemasangan_cylinder_cover();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_validasi_qc_pm10');
        $this->load->view('templates/footer');
    }

    public function validasi_qc_pm10($id)
    {
        $this->M_admin->proses_validasi_pm10($id);
        redirect('Admin/list_validasi_pm10');
    }

    public function tolak_validasi_qc_pm10($id)
    {
        if ($this->session->userdata('username') != "qc10" && $this->session->userdata('username') != "admin") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->proses_tolak_validasi_pm10($id);
        redirect('Admin/list_validasi_pm10');
    }

    // ----------------------------- Akhir fungsi Validasi QC PM 10-----------------------------

    // ----------------------------- Awal fungsi Pengiriman Cylinder PM10-PM3 -----------------------------

    public function list_pengiriman()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Pengiriman cylinder';
        $data['pengiriman_cylinder'] = $this->M_admin->get_all_pengiriman();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_pengiriman');
        $this->load->view('templates/footer');
    }

    public function add_pengiriman()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Pengiriman Cylinder';
        //$data['cylinder'] = $this->M_admin->get_All_cylinder_status_terpasang();
        $data['cylinder'] = $this->M_admin->get_all_history_filter_dropdwn();
        // $data['cylinder'] = $this->M_admin->get_all_pengiriman_filter_dropdwn();
        $data['gudang'] = $this->M_admin->get_all_gudang();


        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_pengiriman');
        $this->load->view('templates/footer');
    }

    public function add_pengiriman_proses()
    {
        $this->M_admin->proses_add_pengiriman();
        // $this->session->set_flashdata('msg', 'Memo sudah terkirim, Untuk Konfirmasi harap hubungi Ext 154');
        redirect('Admin/list_pengiriman');
    }

    public function edit_pengiriman($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Update Pengiriman Cylinder';
        $data['pengiriman_cylinder'] = $this->M_admin->pengiriman_detail($id)->row();
        $data['cylinder'] = $this->M_admin->get_All();
        $data['cover'] = $this->M_admin->get_All_cover();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit_pengiriman');
        $this->load->view('templates/footer');
    }

    public function cetak_spJalan($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['pengiriman_cylinder'] = $this->M_admin->cetak_spJalan_byId($id)->row();
        $this->load->view('admin/cetak_kiriman.php', $data);
    }

    public function pengiriman_update_proses()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->update_pengiriman();
        redirect('Admin/list_pengiriman');
    }

    public function delete_pengiriman($id)
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $where = array('pengiriman_id' => $id);
        $this->M_admin->delete_dice($where, 'pengiriman_cylinder');
        redirect('Admin/list_pengiriman');
    }

    // ----------------------------- Akhir fungsi Pengiriman Cylinder -----------------------------

    // ----------------------------- Awal fungsi Validasi QC PM 3-----------------------------

    public function list_validasi_pm3()
    {
        if ($this->session->userdata('username') != "qc3" && $this->session->userdata('username') != "admin") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Validasi QC PM10';
        // $data['master_dies'] = $this->M_admin->get_All_dice();
        // $data['log_pemasangan_cover_cylinder'] = $this->M_admin->get_all_history_cover_cylinder();
        $data['log_pemasangan_cover_cylinder'] = $this->M_admin->filter_list_pemasangan_cylinder_coverpm3();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_validasi_qc_pm3');
        $this->load->view('templates/footer');
    }

    public function validasi_qc_pm3($id)
    {
        if ($this->session->userdata('username') != "qc3" && $this->session->userdata('username') != "admin") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->proses_validasi_pm3($id);
        redirect('Admin/list_validasi_pm3');
    }

    // ----------------------------- Akhir fungsi Validasi QC PM 10-----------------------------

    // ----------------------------- Awal fungsi Penerimaan Cylinder PM10 PM3-----------------------------

    public function list_penerimaan()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Penerimaan Cylinder';
        $data['pengiriman_cylinder'] = $this->M_admin->get_all_pengiriman();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_penerimaan');
        $this->load->view('templates/footer');
    }

    public function terima_kiriman_proses($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->terima_kiriman($id);
        redirect('Admin/list_penerimaan');
    }

    // ----------------------------- Akhir fungsi Penerimaan Cylinder PM10 PM3-----------------------------

    // ----------------------------- Awal fungsi Pasang Cylinder Ke Mesin-----------------------------
    public function list_pemasangan_cylinderMesin()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Pemasangan Cylinder Ke Mesin';
        $data['pemasangan_cylinder_mesin'] = $this->M_admin->get_all_pemasangan_cylinderMesin_new1();
        $cek_terpasang = $this->M_admin->cek_terpasang()->row();
        $data['terpasang'] = $cek_terpasang;
        if (!(empty($cek_terpasang))) {
            $data['cylinder_id_terpasang'] = $cek_terpasang->cylinder_id;
        }

        $data['cylinder'] = $this->M_admin->get_All();
        $data['cover'] = $this->M_admin->get_All_cover();
        $data['master_dies'] = $this->M_admin->get_All_dice();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_pasang_cylinder_mesin');
        $this->load->view('templates/footer');
    }

    public function install_cylinder_mesin_proses($id, $id_cover)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->proses_pemasangan_cylinderMesin($id, $id_cover);
        redirect('Admin/list_pemasangan_cylinderMesin');
    }

    public function uninstall_cylinder_mesin_proses()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->proses_pelepasan_cylinderMesin();
        redirect('Admin/list_pemasangan_cylinderMesin');
    }

    // ----------------------------- Akihir fungsi Pasang Cylinder Ke Mesin-----------------------------

    // ----------------------------- Awal fungsi Pengiriman Cylinder PM10-PM3 -----------------------------

    public function list_pengiriman_PM3_PM10()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Pengiriman cylinder';
        $data['pengiriman_cylinder'] = $this->M_admin->get_all_pengiriman_pm3_pm10();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_pengiriman_pm3_pm10');
        $this->load->view('templates/footer');
    }

    public function add_pengiriman_PM3_PM10()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Pengiriman Cylinder';
        //$data['cylinder'] = $this->M_admin->get_All_cylinder_status_terpasang();
        $data['cylinder'] = $this->M_admin->get_all_history_filter_dropdwn_pm3_pm10();
        $data['gudang'] = $this->M_admin->get_all_gudang();


        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_pengiriman_pm3_pm10');
        $this->load->view('templates/footer');
    }

    public function add_pengiriman_proses_PM3_PM10()
    {
        $this->M_admin->proses_add_pengiriman_pm3_pm10();
        // $this->session->set_flashdata('msg', 'Memo sudah terkirim, Untuk Konfirmasi harap hubungi Ext 154');
        redirect('Admin/list_pengiriman_pm3_pm10');
    }

    public function edit_pengiriman_PM3_PM10($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Update Pengiriman Cylinder';
        $data['pengiriman_cylinder'] = $this->M_admin->pengiriman_detail($id)->row();
        $data['cylinder'] = $this->M_admin->get_All();
        $data['cover'] = $this->M_admin->get_All_cover();
        $data['gudang'] = $this->M_admin->get_all_gudang();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit_pengiriman_pm3_pm10');
        $this->load->view('templates/footer');
    }

    public function cetak_spJalan_PM3_PM10($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['pengiriman_cylinder'] = $this->M_admin->cetak_spJalan_byId($id)->row();
        $this->load->view('admin/cetak_kiriman_pm3_pm10', $data);
    }

    public function pengiriman_update_proses_PM3_PM10()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $this->M_admin->update_pengiriman_pm3_pm10();
        redirect('Admin/list_pengiriman_pm3_pm10');
    }

    public function delete_pengiriman_PM3_PM10($id)
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $where = array('pengiriman_id' => $id);
        $this->M_admin->delete_dice($where, 'pengiriman_cylinder');
        redirect('Admin/list_pengiriman_pm3_pm10');
    }

    // ----------------------------- Akhir fungsi Pengiriman Cylinder PM10-PM3 -----------------------------

    // ----------------------------- Awal fungsi Penerimaan Cylinder PM3 PM10-----------------------------

    public function list_penerimaan_pm3_pm10()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Penerimaan Cylinder';
        $data['pengiriman_cylinder'] = $this->M_admin->get_all_pengiriman_pm3_pm10();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_penerimaan_pm3_pm10');
        $this->load->view('templates/footer');
    }

    public function terima_kiriman_proses_pm3_pm10($id)
    {
        $this->M_admin->terima_kiriman($id);
        redirect('Admin/list_penerimaan_pm3_pm10');
    }

    // ----------------------------- Akhir fungsi Penerimaan Cylinder PM3 PM10-----------------------------

    // ----------------------------- Awal fungsi Pemusnahan Cylinder -----------------------------

    public function list_pemusnahan()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Pemusnahan Cover';
        $data['pemusnahan'] = $this->M_admin->get_all_pemusnahan_cylinder_cover();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_pemusnahan');
        $this->load->view('templates/footer');
    }

    public function add_pemusnahan()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Tambah Pemusnahan Cover';
        // $data['pemusnahan'] = $this->M_admin->get_all_pemusnahan_cylinder_cover();
        // $data['cover'] = $this->M_admin->get_All_cover();
        $data['cover'] = $this->M_admin->filter_list_pemusnahan_cover();


        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_pemusnahan');
        $this->load->view('templates/footer');
    }

    public function add_pemusnahan_proses()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        // $config['upload_path'] = './upload/bukti_pemusnahan';
        // $config['allowed_types'] = 'jpg|jpeg|png';
        // $config['max_size'] = 100;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;

        // $this->load->library('upload', $config);

        $config['upload_path'] = './upload/bukti_pemusnahan/';
        $config['allowed_types']        = 'jpeg|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['encrypt_name'] = TRUE;
        // $this->load->library('upload', $config);
        $this->upload->initialize($config);
        // $path = '../upload/bukti_pemusnahan';

        if (!$this->upload->do_upload('file_bukti')) {
            $error = $this->upload->display_errors();

            // $this->load->view('upload_form', $error);
            $this->session->set_flashdata('msg', $error);
            redirect('Admin/add_pemusnahan');
        } else {
            // $data = array('upload_data' => $this->upload->data());
            $img = $this->upload->data('file_name');
            $data = array(
                "nomor_dokumen_pemusnahan" => $this->input->post('nomor_dokumen_pemusnahan'),
                "cover_id" => $this->input->post('identitas_cover'),
                "tanggal_pemusnahan" => $this->input->post('tanggal_pemusnahan'),
                "file_bukti" => $img
            );
            $this->db->insert('pemusnahan', $data);

            //$this->M_admin->proses_add_pemusnahan($data);

            $data2 = [

                "status_cover" => 'Sudah Di Musnahkan'
            ];
            $this->db->where('cover_id', $this->input->post('status_cover'));
            $this->db->update('cover', $data2);

            redirect('Admin/list_pemusnahan');
        }
    }

    // ----------------------------- Akhir fungsi Pemusnahan Cylinder -----------------------------

    // ----------------------------- Awal fungsi Monitoring Dies -----------------------------

    public function list_monitoring_dies()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Monitoring Dies';
        $data['master_dies'] = $this->M_admin->monitoring_dies();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_monitoring_dies');
        $this->load->view('templates/footer');
    }

    // ----------------------------- Akhir fungsi Monitoring Dies -----------------------------

    // ----------------------------- Awal fungsi Monitoring Cover -----------------------------

    public function list_monitoring_cover()
    {
        if ($this->session->userdata('level') != "2" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Monitoring Cover';
        $data['cover'] = $this->M_admin->monitoring_cover();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_monitoring_cover');
        $this->load->view('templates/footer');
    }

    // ----------------------------- Akhir fungsi Monitoring Cover -----------------------------

    // ----------------------------- Awal fungsi Monitoring Cylinder -----------------------------

    public function list_monitoring_cylinder()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1" && $this->session->userdata('level') != "2") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Monitoring Cover';
        $data['cylinder'] = $this->M_admin->monitoring_cylinder();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_monitoring_cylinder');
        $this->load->view('templates/footer');
    }

    // ----------------------------- Akhir fungsi Monitoring Cylinder -----------------------------

    // ----------------------------- Awal fungsi Monitoring Validasi QC-----------------------------

    public function list_monitoring_validasi()
    {
        if ($this->session->userdata('level') != "3" && $this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Monitoring Validasi QC';
        $data['log_pemasangan_cover_cylinder'] = $this->M_admin->monitoring_validasi();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_monitoring_validasi_qc');
        $this->load->view('templates/footer');
    }

    // ----------------------------- Akhir fungsi Monitoring Validasi QC-----------------------------

    // ----------------------------- Awal fungsi Managa User -----------------------------

    public function list_user()
    {
        if ($this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - List Monitoring Cover';
        $data['user'] = $this->M_admin->list_user();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/list_user');
        $this->load->view('templates/footer');
    }

    public function add_user()
    {
        if ($this->session->userdata('level') != "1") {
            redirect(base_url('Admin'));
        }
        $data['title'] = 'STALL - Tambah Pemusnahan Cover';
        // $data['user'] = $this->M_admin->proses_add_user();
        $data['tingkatan_user'] = $this->M_admin->get_all_tingkatan_user();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/add_user');
        $this->load->view('templates/footer');
    }

    public function user_add_proses()
    {
        $this->M_admin->proses_add_user();

        redirect('Admin/list_user');
    }
    // ----------------------------- Akhir fungsi Manage User -----------------------------
}
