<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_admin extends CI_Model
{

    // ----------------------------- Awal fungsi cylinder -----------------------------

    function get_All()
    {
        $this->db->select('cover.identitas_cover');
        $this->db->select('cylinder.*');
        $this->db->select('cylinder.lokasi_cylinder', 'gudang.nama_gudang');
        // $this->db->select('log_pemasangan_cover_cylinder.*');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id', 'left');

        //$this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        // $this->db->join('cylinder', 'cylinder.cylinder_id=log_pemasangan_cover_cylinder.cylinder_id');
        return $this->db->get('cylinder')->result();
    }

    public function get_All_cylinder_status()
    {
        $this->db->where('status_cylinder', 'Tidak Terpasang Cover');
        return $this->db->get('cylinder')->result();
    }

    public function get_All_cylinder_status_terpasang()
    {
        $this->db->where('status_cylinder', 'Terpasang Cover');
        return $this->db->get('cylinder')->result();
    }

    public function cylinder_detail($id)
    {
        // $this->db->select('cylinder.*');
        // $this->db->select('cover.*');
        // $this->db->select('cover.identitas_cover');
        // $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        // $this->db->where('cover_id', $id);

        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id', 'left');
        $this->db->where('cylinder_id', $id);
        return $this->db->get('cylinder');
    }

    public function proses_add_cylinder()
    {
        $data = [

            "identitas_cylinder" => $this->input->post('identitas_cylinder'),
            "panjang_cylinder" => $this->input->post('panjang_cylinder'),
            "diameter_cylinder" => $this->input->post('diameter_cylinder'),
            "keliling_cylinder" => $this->input->post('keliling_cylinder'),
            // "nama_produk" => $this->input->post('nama_produk'),
            // "cover_id" => $this->input->post('cover_id'),
            // "tanggal_cover_terpasang" => $this->input->post('tanggal_cover_terpasang'),
            "kondisi_cylinder" => $this->input->post('kondisi_cylinder'),
            "lokasi_cylinder" => $this->input->post('lokasi_cylinder'),
            "status_cylinder" => 'Tidak Terpasang Cover'
        ];

        $this->db->insert('cylinder', $data);
    }

    public function update_cylinder()
    {
        $id = $this->input->post('cylinder_id');
        $data = [

            "identitas_cylinder" => $this->input->post('identitas_cylinder'),
            "panjang_cylinder" => $this->input->post('panjang_cylinder'),
            "diameter_cylinder" => $this->input->post('diameter_cylinder'),
            "keliling_cylinder" => $this->input->post('keliling_cylinder'),
            //  "nama_produk" => $this->input->post('nama_produk'),
            // "identitas_cover" => $this->input->post('identitas_cover'),
            // "identitas_master_dice" => $this->input->post('identitas_master_dice'),
            // "tanggal_cover_terpasang" => $this->input->post('tanggal_cover_terpasang'),
            "kondisi_cylinder" => $this->input->post('kondisi_cylinder'),
            "lokasi_cylinder" => $this->input->post('lokasi_cylinder')
        ];

        $this->db->where('cylinder_id', $id);
        $this->db->update('cylinder', $data);
        //return $this->db->get('memo');
    }

    public function delete_cylinder($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // ----------------------------- Akhir fungsi cylinder -----------------------------

    // ----------------------------- Awal fungsi Cover -----------------------------

    public function get_All_cover()
    {
        $this->db->select('cover.*');
        $this->db->select('master_dies.identitas_master_dies');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        return $this->db->get('cover')->result();
    }

    public function get_All_cover_status()
    {
        $this->db->where('status_cover', 'Tidak Terpasang Cylinder');
        return $this->db->get('cover')->result();
    }

    public function get_All_cover_status_terpasang()
    {
        $this->db->where('status_cover', 'Terpasang');
        return $this->db->get('cover')->result();
    }

    public function proses_add_cover()
    {
        $data = [

            "identitas_cover" => $this->input->post('identitas_cover'),
            "master_dies_id" => $this->input->post('identitas_master_dies'),
            "ukuran_cover" => $this->input->post('ukuran_cover'),
            "mesh_cover" => $this->input->post('mesh_cover'),
            "layer_cover" => $this->input->post('layer_cover'),
            "status_cover" => 'Tidak Terpasang Cylinder'
        ];

        $this->db->insert('cover', $data);
    }

    public function cover_detail($id)
    {
        $this->db->select('cover.*');
        $this->db->select('master_dies.identitas_master_dies');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        $this->db->where('cover_id', $id);
        return $this->db->get('cover');
    }

    public function update_cover()
    {
        $id = $this->input->post('cover_id');
        $data = [

            "identitas_cover" => $this->input->post('identitas_cover'),
            "identitas_master_dies" => $this->input->post('identitas_master_dies'),
            "ukuran_cover" => $this->input->post('ukuran_cover'),
            "mesh_cover" => $this->input->post('mesh_cover'),
            "layer_cover" => $this->input->post('layer_cover')
        ];

        $this->db->where('cover_id', $id);
        $this->db->update('cover', $data);
        //return $this->db->get('memo');
    }

    public function delete_cover($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // ----------------------------- Akhir fungsi Cover -----------------------------

    // ----------------------------- Awal fungsi master dice -----------------------------

    function get_All_dice()
    {
        // $this->db->join('cylinder', 'cylinder.id=masterdice.id');
        return $this->db->get('master_dies')->result();
    }

    public function filter_dies()
    {
        $this->db->select('master_dies.*');
        $this->db->where('tanggal_approve <>', '0000-00-00');
        return $this->db->get('master_dies')->result();
    }

    public function proses_add_dice()
    {
        $data = [

            "identitas_master_dies" => $this->input->post('identitas_master_dies'),
            "nama_produk" => $this->input->post('nama_produk'),
            "revisi_ke" => $this->input->post('revisi_ke'),
            "tanggal_pembuatan" => $this->input->post('tanggal_pembuatan'),
            // "tanggal_approve" => $this->input->post('tanggal_approve'),
            "bahan_dies" => $this->input->post('bahan_dies'),
            "ukuran_dies" => $this->input->post('ukuran_dies'),
            "desain_gambar" => $this->input->post('desain_gambar'),
            "keterangan_desain_gambar" => $this->input->post('keterangan_desain_gambar'),
            "kode_pr_hs_tm" => $this->input->post('kode_pr_hs_tm'),
            "jum_pasang" => $this->input->post('jum_pasang'),
            "aplikasi" => 'C'
        ];

        $this->db->insert('master_dies', $data);
    }

    public function dice_detail($id)
    {
        $this->db->where('master_dies_id', $id);
        return $this->db->get('master_dies');
    }

    public function update_dice()
    {
        $id = $this->input->post('master_dies_id');
        $data = [

            "identitas_master_dies" => $this->input->post('identitas_master_dies'),
            "nama_produk" => $this->input->post('nama_produk'),
            "revisi_ke" => $this->input->post('revisi_ke'),
            // "tanggal_pembuatan" => $this->input->post('tanggal_pembuatan'),
            "tanggal_approve" => $this->input->post('tanggal_approve'),
            "bahan_dies" => $this->input->post('bahan_dies'),
            "ukuran_dies" => $this->input->post('ukuran_dies'),
            "desain_gambar" => $this->input->post('desain_gambar'),
            "keterangan_desain_gambar" => $this->input->post('keterangan_desain_gambar'),
            "kode_pr_hs_tm" => $this->input->post('kode_pr_hs_tm'),
            "jum_pasang" => $this->input->post('jum_pasang'),
            "aplikasi" => $this->input->post('aplikasi')
        ];

        $this->db->where('master_dies_id', $id);
        $this->db->update('master_dies', $data);
        //return $this->db->get('memo');
    }

    public function delete_dice($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // ----------------------------- Akhir fungsi Master Dice -----------------------------

    // ----------------------------- Awal fungsi Gudang -----------------------------
    public function get_all_gudang()
    {
        return $this->db->get('gudang')->result();
    }

    public function get_all_gudang_pm10()
    {
        $this->db->where('nama_gudang', 'PM10');
        return $this->db->get('gudang')->result();
    }

    // ----------------------------- Akhir fungsi Gudang -----------------------------

    // ----------------------------- Awal fungsi Log History Pemasangan Cylinder Mesin-----------------------------

    public function get_all_history_cover_cylinder()
    {
        $this->db->select('cover.identitas_cover');
        $this->db->select('cylinder.identitas_cylinder');
        $this->db->select('log_pemasangan_cover_cylinder.*');
        $this->db->select('pemasangan_cylinder_mesin.tonase_cover');
        $this->db->join('pemasangan_cylinder_mesin', 'pemasangan_cylinder_mesin.cylinder_id=log_pemasangan_cover_cylinder.cylinder_id', 'left');
        $this->db->join('cover', 'cover.cover_id=log_pemasangan_cover_cylinder.cover_id');
        $this->db->join('cylinder', 'cylinder.cylinder_id=log_pemasangan_cover_cylinder.cylinder_id');
        $this->db->where('pemasangan_id in (SELECT MAX(pemasangan_id) from pemasangan_cylinder_mesin GROUP BY cylinder_id)', NULL, FALSE);
        $this->db->group_by('log_pemasangan_cover_cylinder.log_id');
        return $this->db->get('log_pemasangan_cover_cylinder')->result();
    }

    public function get_all_history_filter_dropdwn()
    {
        // $this->db->select('cover.*');
        // $this->db->select('cover.status_cover');
        // $this->db->where('cover_id', 'status_cover' == 'Terpasang');
        // $this->db->select('log_pemasangan_cover_cylinder.status_pengiriman');
        $this->db->select('cylinder.cylinder_id, cylinder.identitas_cylinder');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cover', 'cylinder.cover_id=cover.cover_id', 'left');
        $this->db->join('master_dies', 'cover.master_dies_id=master_dies.master_dies_id', 'left');
        // $this->db->where('status_cylinder' == 'Terpasang' && 'lokasi_cover' == 'PM10' || 'status_cylinder' == null);
        //        $this->db->where('status_cylinder', 'Terpasang', 'Tidak Terpasang');
        $this->db->where('lokasi_cylinder', 'PM10');
        // $this->db->where('status_pengiriman', 'Diterima');
        return $this->db->get('cylinder')->result();
    }

    // ----------------------------- Akhir fungsi Log History Pemasangan Cylinder Mesin-----------------------------

    // ---------------------------------- Pasang Cover ----------------------------------

    public function filter_list_pemasangan_cylinder_cover()
    {
        $this->db->select('log_pemasangan_cover_cylinder.*');
        $this->db->select('cylinder.cylinder_id, cylinder.identitas_cylinder, cylinder.tanggal_cover_terpasang, cylinder.kondisi_cylinder, cylinder.lokasi_cylinder');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cylinder', 'log_pemasangan_cover_cylinder.cylinder_id=cylinder.cylinder_id', 'left');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        // $this->db->where('lokasi_cylinder', 'PM10');
        return $this->db->get('log_pemasangan_cover_cylinder')->result();
    }

    public function filter_list_pelepasan_cylinder_cover()
    {
        $this->db->select('log_pemasangan_cover_cylinder.*');
        // $this->db->select('pemasangan_cylinder_mesin.*');
        $this->db->select('cylinder.cylinder_id, cylinder.identitas_cylinder, cylinder.tanggal_cover_terpasang, cylinder.kondisi_cylinder, cylinder.lokasi_cylinder');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        // $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cover', 'log_pemasangan_cover_cylinder.cover_id=cover.cover_id', 'left');
        // $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('cylinder', 'cover.cover_id=cylinder.cover_id');
        // $this->db->join('pemasangan_cylinder_mesin', 'cover.cover_id=pemasangan_cylinder_mesin.cover_id');
        // $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        $this->db->where('lokasi_cover', 'PM10');
        $this->db->group_by('cylinder.cylinder_id');
        // $this->db->where('status_cover', 'Terpasang');
        // $this->db->group_by('cover.cover_id'); tanggal 28/4/23
        // $this->db->where('pemasangan_id in (SELECT MAX(pemasangan_id) from pemasangan_cylinder_mesin GROUP BY cylinder_id)', NULL, FALSE);
        return $this->db->get('log_pemasangan_cover_cylinder')->result();
    }

    // public function filter_pelepasan_cover_cylinder()
    // {
    //     $this->db->select('cover.*');
    //     $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
    //     $this->db->select('cylinder.cylinder_id,cylinder.identitas_cylinder');
    //     $this->db->join('master_dies', 'cover.master_dies_id=master_dies.master_dies_id');
    //     $this->db->join('cylinder', 'cover.cover_id=cylinder.cover_id', 'left');
    //     $this->db->where('status_cover', 'Tidak Terpasang Cylinder');
    //     $this->db->where('lokasi_cylinder', 'PM10');
    //     return $this->db->get('cover')->result();
    // }

    public function filter_list_pemasangan_cylinder_coverpm3()
    {
        $this->db->select('log_pemasangan_cover_cylinder.*');
        $this->db->select('cylinder.cylinder_id, cylinder.identitas_cylinder, cylinder.tanggal_cover_terpasang, cylinder.kondisi_cylinder, cylinder.lokasi_cylinder');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cylinder', 'log_pemasangan_cover_cylinder.cylinder_id=cylinder.cylinder_id', 'left');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        // $this->db->where('lokasi_cylinder', 'PM3');
        return $this->db->get('log_pemasangan_cover_cylinder')->result();
    }

    public function proses_add_pasangCvr()
    {
        $data = [
            "cover_id" => $this->input->post('identitas_cover'),
            "cylinder_id" => $this->input->post('identitas_cylinder'),
            "tanggal_pasang_cover" => $this->input->post('tanggal_pasang_cover'),
            "kondisi_cover" => $this->input->post('kondisi_cover'),
            "lokasi_cover" => $this->input->post('lokasi_cover')
        ];
        $this->db->insert('log_pemasangan_cover_cylinder', $data);

        $data2 = [
            "status_cover" => 'Terpasang'
        ];

        $this->db->where('cover_id', $this->input->post('identitas_cover'));
        $this->db->update('cover', $data2);

        $data3 = [
            "cover_id" => $this->input->post('identitas_cover'),
            "tanggal_cover_terpasang" => $this->input->post('tanggal_pasang_cover'),
            "status_cylinder" => 'Terpasang'
        ];

        $this->db->where('cylinder_id', $this->input->post('identitas_cylinder'));
        $this->db->update('cylinder', $data3);
    }

    public function pasang_cover_detail($id)
    {
        $this->db->where('log_id', $id);
        return $this->db->get('log_pemasangan_cover_cylinder');
    }

    public function update_pasang_cover()
    {
        $id = $this->input->post('log_id');
        $data = [
            "cover_id" => $this->input->post('identitas_cover'),
            "cylinder_id" => $this->input->post('identitas_cylinder'),
            "tanggal_pasang_cover" => $this->input->post('tanggal_pasang_cover'),
            "kondisi_cover" => $this->input->post('kondisi_cover'),
            "lokasi_cover" => $this->input->post('lokasi_cover')
        ];

        $this->db->where('log_id', $id);
        $this->db->update('log_pemasangan_cover_cylinder', $data);

        // update cover dan cyl lama
        $data2 = [

            "status_cover" => 'Tidak Terpasang Cylinder'
        ];
        $this->db->where('cover_id', $this->input->post('identitas_cover_lama'));
        $this->db->update('cover', $data2);

        $data3 = [

            "status_cylinder" => 'Tidak Terpasang Cover'
        ];
        $this->db->where('cylinder_id', $this->input->post('identitas_cylinder_lama'));
        $this->db->update('cylinder', $data3);

        // update cover dan cyl baru

        $data4 = [

            "status_cover" => 'Terpasang Cylinder'
        ];
        $this->db->where('cover_id', $this->input->post('identitas_cover'));
        $this->db->update('cover', $data4);

        $data5 = [

            "status_cylinder" => 'Terpasang Cover'
        ];
        $this->db->where('cylinder_id', $this->input->post('identitas_cylinder'));
        $this->db->update('cylinder', $data5);
    }

    // ---------------------------------- Pasang Cover ----------------------------------

    // ---------------------------------- Pelepasan Cover ----------------------------------

    public function lepas_cover($id, $cover_id, $cylinder_id)
    {
        # code...$id = $this->input->post('log_id');
        $data = [
            "tanggal_lepas_cover" => date('Y-m-d'),
            // "tonase_cover" => $this->input->post('tonase_cover')
            "cylinder_id" => 0
        ];

        $this->db->where('log_id', $id);
        $this->db->update('log_pemasangan_cover_cylinder', $data);

        // update cover dan cyl baru

        $data4 = [

            "status_cover" => 'Tidak Terpasang Cylinder'
        ];
        $this->db->where('cover_id', $cover_id);
        $this->db->update('cover', $data4);

        $data5 = [

            "status_cylinder" => 'Tidak Terpasang Cover',
            "cover_id" => 0
        ];
        $this->db->where('cylinder_id', $cylinder_id);
        $this->db->update('cylinder', $data5);
    }

    // ----------------------------- Akhir fungsi Log History -----------------------------

    // ----------------------------- Awal fungsi Validasi QC PM10 -----------------------------

    public function proses_validasi_pm10($id)
    {
        $data = [
            "tanggal_validasi_pm10" => date('Y-m-d H:i:s'),
            "status_validasi_pm10" => "ACC QC"
        ];

        $this->db->where('log_id', $id);
        $this->db->update('log_pemasangan_cover_cylinder', $data);
    }

    public function proses_tolak_validasi_pm10($id)
    {
        $data = [
            "status_validasi_pm10" => "Ditolak QC"
        ];

        $this->db->where('log_id', $id);
        $this->db->update('log_pemasangan_cover_cylinder', $data);
    }

    // ----------------------------- Akhir fungsi Validasi QC PM10 -----------------------------

    // ----------------------------- Awal fungsi Validasi QC PM3 -----------------------------

    public function proses_validasi_pm3($id)
    {
        $data = [
            "tanggal_validasi_pm3" => date('Y-m-d H:i:s'),
            "status_validasi_pm3" => "ACC QC"
        ];

        $this->db->where('log_id', $id);
        $this->db->update('log_pemasangan_cover_cylinder', $data);
    }

    public function proses_tolak_validasi_pm3($id)
    {
        $data = [
            "status_validasi_pm10" => "Ditolak QC"
        ];

        $this->db->where('log_id', $id);
        $this->db->update('log_pemasangan_cover_cylinder', $data);
    }


    // ----------------------------- Akhir fungsi Validasi QC PM3 -----------------------------


    // ----------------------------- Awal fungsi Pengiriman Cylinder -----------------------------
    public function get_all_pengiriman()
    {
        $this->db->select('pengiriman_cylinder.*');
        $this->db->select('cylinder.identitas_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->where('asal_pengiriman', 'PM10');
        return $this->db->get('pengiriman_cylinder')->result();
    }

    public function proses_add_pengiriman()
    {
        $data = [
            "nomor_dokumen" => $this->input->post('nomor_dokumen'),
            "cylinder_id" => $this->input->post('identitas_cylinder'),
            "tanggal_kirim" => $this->input->post('tanggal_kirim'),
            "asal_pengiriman" => $this->input->post('asal_pengiriman'),
            "tujuan_pengiriman" => $this->input->post('tujuan_pengiriman'),
            "nomor_kendaraan" => $this->input->post('nomor_kendaraan'),
            "sopir" => $this->input->post('sopir'),
            "mengetahui" => $this->input->post('mengetahui'),
            "status_pengiriman" => 'Terkirim'
        ];
        $this->db->insert('pengiriman_cylinder', $data);
        // $this->db->select('pengiriman_cylinder.status_pengiriman');
        // $this->db->where('status_pengiriman', 'Diterima');

        // Update lokasi cylinder
        $data2 = [
            "lokasi_cylinder" => 'PM3'
        ];
        $this->db->where('cylinder_id', $this->input->post('identitas_cylinder'));
        $this->db->update('cylinder', $data2);
    }

    public function get_all_pengiriman_filter_dropdwn()
    {
        $this->db->select('cylinder.cylinder_id, cylinder.identitas_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->join('cylinder', 'log_pemasangan_cover_cylinder.cylinder_id=cylinder.cylinder_id');
        $this->db->where('status_pengiriman', 'Diterima');
        $this->db->where('lokasi_cylinder', 'PM10');
        $this->db->where('status_validasi_pm10', 'ACC QC');
        return $this->db->get('cylinder')->result();
    }

    public function cetak_spJalan_byId($id)
    {
        $this->db->select('pengiriman_cylinder.*');
        $this->db->select('cylinder.identitas_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        $this->db->where('pengiriman_id', $id);
        return $this->db->get('pengiriman_cylinder');
    }

    public function pengiriman_detail($id)
    {
        $this->db->where('pengiriman_id', $id);
        return $this->db->get('pengiriman_cylinder');
    }

    public function update_pengiriman()
    {
        $id = $this->input->post('pengiriman_id');
        $data = [
            "nomor_dokumen" => $this->input->post('nomor_dokumen'),
            "cylinder_id" => $this->input->post('identitas_cylinder'),
            "tanggal_kirim" => $this->input->post('tanggal_kirim'),
            "asal_pengiriman" => $this->input->post('asal_pengiriman'),
            "tujuan_pengiriman" => $this->input->post('tujuan_pengiriman'),
            "nomor_kendaraan" => $this->input->post('nomor_kendaraan'),
            "sopir" => $this->input->post('sopir'),
            "mengetahui" => $this->input->post('mengetahui')

        ];

        $this->db->where('pengiriman_id', $id);
        $this->db->update('pengiriman_cylinder', $data);
    }

    public function delete_pengiriman($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ----------------------------- Akhir fungsi Pengiriman Cylinder -----------------------------

    // ----------------------------- Awal fungsi Penerimaan Cylinder -----------------------------
    public function terima_kiriman($id)
    {
        $data = [
            "tanggal_terima" => date('Y-m-d'),
            "status_pengiriman" => "Diterima"
        ];

        $this->db->where('pengiriman_id ', $id);
        $this->db->update('pengiriman_cylinder', $data);
    }
    // ----------------------------- Akhir fungsi Penerimaan Cylinder -----------------------------

    // ----------------------------- Awal fungsi Pemasangan Cylinder Ke Mesin -----------------------------

    public function get_all_pemasangan_cylinderMesin()
    {

        //        SELECT * FROM pengiriman_cylinder 
        //WHERE tujuan_pengiriman='PM3' and created_pengiriman in (SELECT MAX(created_pengiriman) from pengiriman_cylinder GROUP BY cylinder_id);


        // $this->db->select('pemasangan_cylinder_mesin.tanggal_pasang_mesin, pemasangan_cylinder_mesin.status_pemasangan_mesin, pemasangan_cylinder_mesin.pemasangan_id');
        $this->db->select('pemasangan_cylinder_mesin.*');
        $this->db->select('pengiriman_cylinder.pengiriman_id, pengiriman_cylinder.cylinder_id, pengiriman_cylinder.tanggal_terima, pengiriman_cylinder.tujuan_pengiriman, pengiriman_cylinder.status_pengiriman');
        $this->db->select('cylinder.identitas_cylinder, cover.identitas_cover, cover.cover_id, master_dies.nama_produk');
        $this->db->from('pengiriman_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        $this->db->join('pemasangan_cylinder_mesin', 'pemasangan_cylinder_mesin.cylinder_id=pengiriman_cylinder.cylinder_id', 'left');
        $this->db->where('tujuan_pengiriman', 'PM3');
        $this->db->where('created_pengiriman in (SELECT MAX(created_pengiriman) from pengiriman_cylinder GROUP BY cylinder_id)', NULL, FALSE);
        //$this->db->where('pemasangan_id in (SELECT MAX(pengiriman_id) from pemasangan_cylinder_mesin GROUP BY cylinder_id)', NULL, FALSE);
        //        $this->db->group_by('pemasangan_cylinder_mesin.cylinder_id');
        $this->db->order_by('pemasangan_cylinder_mesin.created_pemasangan', 'desc');
        $query = $this->db->get();
        return $query->result();



        // $this->db->select('pemasangan_cylinder_mesin.*');
        // $this->db->select('cylinder.identitas_cylinder, cover.identitas_cover, master_dice.nama_produk');
        // $this->db->select('cover.identitas_cover');
        // $this->db->select('master_dice.identitas_master_dice');
        // $this->db->select('master_dice.nama_produk');
        // $this->db->join('cylinder', 'cylinder.cylinder_id=pemasangan_cylinder_mesin.cylinder_id');
        // $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        // $this->db->join('master_dice', 'master_dice.master_dies_id=cover.master_dies_id');
        // // $this->db->where('pemasangan_id', $id);

        // return $this->db->get('pemasangan_cylinder_mesin');
    }

    public function get_all_pemasangan_cylinderMesin_new1()
    {

        $this->db->select('pemasangan_cylinder_mesin.*');
        $this->db->select('pengiriman_cylinder.pengiriman_id, pengiriman_cylinder.cylinder_id, pengiriman_cylinder.tanggal_terima,
         pengiriman_cylinder.tujuan_pengiriman, pengiriman_cylinder.status_pengiriman');
        $this->db->select('cylinder.identitas_cylinder, cover.identitas_cover, cover.cover_id, master_dies.nama_produk');
        $this->db->select('log_pemasangan_cover_cylinder.status_validasi_pm3');
        $this->db->from('pengiriman_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('log_pemasangan_cover_cylinder', 'log_pemasangan_cover_cylinder.cover_id=cover.cover_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        $this->db->join('pemasangan_cylinder_mesin', 'pemasangan_cylinder_mesin.cylinder_id=pengiriman_cylinder.cylinder_id', 'left');
        $this->db->where('lokasi_cylinder', 'PM3');
        $this->db->where('status_pengiriman', 'Diterima');
        $this->db->where('status_validasi_pm3', 'ACC QC');
        $this->db->where('created_pengiriman in (SELECT MAX(created_pengiriman) from pengiriman_cylinder GROUP BY cylinder_id)', NULL, FALSE);

        $this->db->where("created_pemasangan IS NULL OR created_pemasangan IN (SELECT MAX(created_pemasangan) FROM pemasangan_cylinder_mesin GROUP BY cylinder_id)", NULL, FALSE);
        //$this->db->where("CASE WHEN pemasangan_cylinder_mesin.pemasangan_id<>'' THEN created_pemasangan in (SELECT MAX(created_pemasangan) from pemasangan_cylinder_mesin GROUP BY cylinder_id) END", NULL, FALSE);

        // $this->db->where('pemasangan_id in (SELECT MAX(pemasangan_id) from pemasangan_cylinder_mesin GROUP BY cylinder_id)', NULL, FALSE);
        $this->db->group_by('pemasangan_cylinder_mesin.cylinder_id');
        $this->db->order_by('pemasangan_cylinder_mesin.created_pemasangan', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function proses_pemasangan_cylinderMesin($id, $id_cover)
    {
        $data = [
            "cylinder_id" => $id,
            "cover_id" => $id_cover,
            "tanggal_pasang_mesin" => date('Y-m-d'),
            "status_pemasangan_mesin" => "Terpasang Di Mesin"
        ];

        //$this->db->where('pemasangan_id', $id);
        $this->db->insert('pemasangan_cylinder_mesin', $data);

        // $data2 = [
        //     "tonase_cover" => $this->input->post('tonase_cover')
        // ];

        // $this->db->where('cover_id', $tonase_cover);
        // $this->db->update('cover', $data2);
    }

    public function proses_pelepasan_cylinderMesin()
    {
        // $data = [
        //     "cylinder_id" => $id,
        //     "cover_id" => $id_cover,
        //     "tanggal_lepas_mesin" => date('Y-m-d'),
        //     "tonase_cover" => $this->input->post('tonase_cover'),
        //     "status_pemasangan_mesin" => "Terlepas Dari Mesin",
        //     "alasan_pelepasan" => $this->input->post('alasan_pelepasan')
        // ];
        // $this->db->insert('pemasangan_cylinder_mesin', $data);

        $id = $this->input->post('pemasangan_id');
        $data = [
            "tanggal_lepas_mesin" => date('Y-m-d'),
            "tonase_cover" => $this->input->post('tonase_cover'),
            "status_pemasangan_mesin" => "Terlepas Dari Mesin",
            "alasan_pelepasan" => $this->input->post('alasan_pelepasan')
        ];

        $this->db->where('pemasangan_id', $id);
        $this->db->update('pemasangan_cylinder_mesin', $data);
    }


    public function cek_terpasang()
    {
        $this->db->select('pemasangan_cylinder_mesin.*');
        $this->db->where('status_pemasangan_mesin', 'Terpasang Di Mesin');
        return $this->db->get('pemasangan_cylinder_mesin');
    }
    // ----------------------------- Akhir fungsi Pemasangan Cylinder Ke Mesin -----------------------------

    // ----------------------------- Awal fungsi Pengiriman Cylinder PM3 PM10 -----------------------------
    public function get_all_pengiriman_pm3_pm10()
    {
        $this->db->select('pengiriman_cylinder.*');
        $this->db->select('pemasangan_cylinder_mesin.*');
        $this->db->select('cylinder.identitas_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->join('pemasangan_cylinder_mesin', 'cylinder.cylinder_id=pemasangan_cylinder_mesin.cylinder_id');
        $this->db->where('asal_pengiriman', 'PM3');
        $this->db->group_by('pengiriman_cylinder.pengiriman_id');
        return $this->db->get('pengiriman_cylinder')->result();
    }

    public function proses_add_pengiriman_pm3_pm10()
    {
        $data = [
            "nomor_dokumen" => $this->input->post('nomor_dokumen'),
            "cylinder_id" => $this->input->post('identitas_cylinder'),
            "tanggal_kirim" => $this->input->post('tanggal_kirim'),
            "asal_pengiriman" => $this->input->post('asal_pengiriman'),
            "tujuan_pengiriman" => $this->input->post('tujuan_pengiriman'),
            "nomor_kendaraan" => $this->input->post('nomor_kendaraan'),
            "sopir" => $this->input->post('sopir'),
            "mengetahui" => $this->input->post('mengetahui'),
            "status_pengiriman" => 'Terkirim'
        ];
        $this->db->insert('pengiriman_cylinder', $data);


        $data2 = [
            "lokasi_cylinder" => $this->input->post('tujuan_pengiriman')
        ];
        $this->db->where('cylinder_id', $this->input->post('identitas_cylinder'));
        $this->db->update('cylinder', $data2);

        // $data3 = [
        //     "lokasi_cylinder" => 'Gudang Getas Pejaten'
        // ];
        // $this->db->where('cylinder_id', $this->input->post('identitas_cylinder'));
        // $this->db->update('cylinder', $data3);
    }

    public function get_all_history_filter_dropdwn_pm3_pm10()
    {
        // $this->db->select('cover.*');
        // $this->db->select('cover.status_cover');
        // $this->db->where('cover_id', 'status_cover' == 'Terpasang');
        $this->db->select('cylinder.cylinder_id, cylinder.identitas_cylinder');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cover', 'cylinder.cover_id=cover.cover_id', 'left');
        $this->db->join('master_dies', 'cover.master_dies_id=master_dies.master_dies_id', 'left');
        // $this->db->where('status_cylinder' == 'Terpasang' && 'lokasi_cover' == 'PM10' || 'status_cylinder' == null);
        //        $this->db->where('status_cylinder', 'Terpasang', 'Tidak Terpasang');
        $this->db->where('lokasi_cylinder', 'PM3');
        // $this->db->where('status_pengiriman', 'Diterima');
        return $this->db->get('cylinder')->result();
    }


    public function cetak_spJalan_byId_pm3_pm10($id)
    {
        $this->db->select('pengiriman_cylinder.*');
        $this->db->select('cylinder.identitas_cylinder');
        $this->db->join('cylinder', 'cylinder.cylinder_id=pengiriman_cylinder.cylinder_id');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cover', 'cover.cover_id=cylinder.cover_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id');
        $this->db->where('pengiriman_id', $id);
        return $this->db->get('pengiriman_cylinder');
    }

    public function pengiriman_detail_pm3_pm10($id)
    {
        $this->db->where('pengiriman_id', $id);
        return $this->db->get('pengiriman_cylinder');
    }

    public function update_pengiriman_pm3_pm10()
    {
        $id = $this->input->post('pengiriman_id');
        $data = [
            "nomor_dokumen" => $this->input->post('nomor_dokumen'),
            "cylinder_id" => $this->input->post('identitas_cylinder'),
            "tanggal_kirim" => $this->input->post('tanggal_kirim'),
            "asal_pengiriman" => $this->input->post('asal_pengiriman'),
            "tujuan_pengiriman" => $this->input->post('tujuan_pengiriman'),
            "nomor_kendaraan" => $this->input->post('nomor_kendaraan'),
            "sopir" => $this->input->post('sopir'),
            "mengetahui" => $this->input->post('mengetahui')

        ];

        $this->db->where('pengiriman_id', $id);
        $this->db->update('pengiriman_cylinder', $data);
    }

    public function delete_pengiriman_pm3_pm10($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ----------------------------- Akhir fungsi Pengiriman Cylinder PM3 PM10 -----------------------------

    // ----------------------------- Awal fungsi Pemusnahan Cover -----------------------------


    public function get_all_pemusnahan_cylinder_cover()
    {
        $this->db->select('pemusnahan.*');
        $this->db->select('cover.identitas_cover, cover.cover_id');
        $this->db->join('cover', 'cover.cover_id=pemusnahan.cover_id');
        return $this->db->get('pemusnahan')->result();
    }

    public function filter_list_pemusnahan_cover()
    {
        $this->db->select('cover.*');
        $this->db->where('status_cover', 'Tidak Terpasang Cylinder');
        return $this->db->get('cover')->result();
    }

    public function filter_pemusnahan_pemasangan_cover_cylinder()
    {
        $this->db->select('cover.*');
    }

    // public function proses_add_pemusnahan($data)
    // {
    //     // $data = [
    //     //     "nomor_dokumen_pemusnahan" => $this->input->post('nomor_dokumen_pemusnahan'),
    //     //     "cover_id" => $this->input->post('identitas_cover'),
    //     //     "tanggal_pemusnahan" => $this->input->post('tanggal_pemusnahan'),
    //     //     "file_bukti" => $this->File_upload_model->upload_file('file_bukti')
    //     // ];
    // }


    // ----------------------------- Akhir fungsi Pemusnahan Cover -----------------------------

    // ----------------------------- Awal fungsi Monitoring Dies -----------------------------

    public function monitoring_dies()
    {
        $this->db->select('master_dies.*');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->join('cover', 'master_dies.master_dies_id=cover.master_dies_id', 'left');
        return $this->db->get('master_dies')->result();
    }

    // ----------------------------- Akhir fungsi Monitoring Dies -----------------------------

    // ----------------------------- Awal fungsi Monitoring Cover -----------------------------

    public function monitoring_cover()
    {
        $this->db->select('cover.*');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->select('log_pemasangan_cover_cylinder.log_id, log_pemasangan_cover_cylinder.cover_id, log_pemasangan_cover_cylinder.tanggal_pasang_cover,
        log_pemasangan_cover_cylinder.tanggal_lepas_cover');
        $this->db->select('cylinder.cylinder_id,cylinder.identitas_cylinder');
        $this->db->select('pemusnahan.pemusnahan_id, pemusnahan.cover_id, pemusnahan.tanggal_pemusnahan');
        $this->db->select('pemasangan_cylinder_mesin.pemasangan_id, pemasangan_cylinder_mesin.tonase_cover');
        $this->db->join('master_dies', 'cover.master_dies_id=master_dies.master_dies_id');
        $this->db->join('cylinder', 'cover.cover_id=cylinder.cover_id', 'left');
        $this->db->join('pemasangan_cylinder_mesin', 'cover.cover_id=pemasangan_cylinder_mesin.cover_id', 'left');
        $this->db->join('log_pemasangan_cover_cylinder', 'log_pemasangan_cover_cylinder.cover_id=cover.cover_id', 'left');
        $this->db->join('pemusnahan', 'pemusnahan.cover_id=cover.cover_id', 'left');
        $this->db->group_by('cover.cover_id');
        return $this->db->get('cover')->result();
    }

    // ----------------------------- Akhir fungsi Monitoring Cover -----------------------------

    // ----------------------------- Awal fungsi Monitoring Cylinder -----------------------------

    public function monitoring_cylinder()
    {
        $this->db->select('cylinder.*');
        $this->db->select('log_pemasangan_cover_cylinder.log_id, log_pemasangan_cover_cylinder.cover_id, log_pemasangan_cover_cylinder.tanggal_pasang_cover,
        log_pemasangan_cover_cylinder.tanggal_lepas_cover');
        $this->db->select('cover.cover_id, cover.identitas_cover, cover.master_dies_id');
        $this->db->select('master_dies.master_dies_id, master_dies.identitas_master_dies, master_dies.nama_produk');
        $this->db->join('cover', 'cylinder.cover_id=cover.cover_id', 'left');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id', 'left');
        $this->db->join('log_pemasangan_cover_cylinder', 'log_pemasangan_cover_cylinder.cylinder_id=cylinder.cylinder_id', 'left');
        return $this->db->get('cylinder')->result();
    }

    // ----------------------------- Akhir fungsi Monitoring Cylinder -----------------------------

    // ----------------------------- Awal fungsi Monitoring Validasi QC -----------------------------

    public function monitoring_validasi()
    {
        $this->db->select('log_pemasangan_cover_cylinder.*');
        $this->db->select('cover.cover_id, cover.identitas_cover');
        $this->db->select('cylinder.cylinder_id,cylinder.identitas_cylinder');
        $this->db->select('master_dies.master_dies_id, master_dies.nama_produk');
        $this->db->join('cover', 'cover.cover_id=log_pemasangan_cover_cylinder.cover_id');
        $this->db->join('cylinder', 'cylinder.cylinder_id=log_pemasangan_cover_cylinder.cylinder_id');
        $this->db->join('master_dies', 'master_dies.master_dies_id=cover.master_dies_id', 'left');


        return $this->db->get('log_pemasangan_cover_cylinder')->result();
    }

    // ----------------------------- Akhir fungsi Monitoring Dies -----------------------------

    // ----------------------------- Awal fungsi Managa User -----------------------------
    public function get_all_tingkatan_user()
    {
        return $this->db->get('tingkatan_user')->result();
    }

    public function list_user()
    {
        $this->db->select('user.*');
        $this->db->select('tingkatan_user.level_user, tingkatan_user.bagian');
        $this->db->join('tingkatan_user', 'user.level_user=tingkatan_user.level_user');
        return $this->db->get('user')->result();
    }

    public function proses_add_user()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            "level_user" => $this->input->post('bagian')
        ];

        $this->db->insert('user', $data);
    }
    // ----------------------------- Akhir fungsi Managa User -----------------------------


}
