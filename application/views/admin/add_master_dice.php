<div class="container-fluid">

    <h2>Tambah Master Dies</h2>
    <sub>Jika kolom dikosongi isikan strip "-" saja</sub>

    <form action="<?php echo base_url('Admin/dice_add_proses') ?>" method="post">

        <div class="form-group row" id="row_identitas_master_dies">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Master Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_master_dies" required>
            </div>
        </div>

        <div class="form-group row" id="row_nama_produk">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_produk" required>
            </div>
        </div>

        <div class="form-group row" id="row_revisi_ke">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Revisi Ke</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="revisi_ke" required>
            </div>
        </div>

        <div class="form-group row" id="row_tanggal_pembuatan">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pembuatan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_pembuatan">
            </div>
        </div>

        <!-- <div class="form-group row" id="row_tanggal_approve">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Approve</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_approve">
            </div>
        </div> -->

        <!-- <div class="form-group row" id="row_bahan_dies">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bahan_dies" required>
            </div>
        </div> -->

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan Dies</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_bahan_dies" name="bahan_dies" style="width: 100%;">
                    <option value="" selected="selected">--Pilih--</option>
                    <option value="Besi">Besi</option>
                    <option value="Kuningan">Kuningan</option>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_ukuran_dies">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ukuran Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ukuran_dies" required>
            </div>
        </div>

        <div class="form-group row" id="row_desain_gambar">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Gambar Master Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="desain_gambar" required>
            </div>
        </div>

        <div class="form-group row" id="row_keterangan_desain_gambar">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Keterangan Gambar Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan_desain_gambar" required>
            </div>
        </div>

        <!-- <div class="form-group row" id="row_kode_pr_hs_tm">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kode PR/HS/TM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_pr_hs_tm" required>
            </div>
        </div> -->

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kode PR/HS/TM</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_kode_pr_hs_tm" name="kode_pr_hs_tm" style="width: 100%;">
                    <option value="" selected="selected">--Pilih--</option>
                    <option value="PR">PR</option>
                    <option value="HS">HS</option>
                    <option value="TM">TM</option>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_jum_pasang">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah Pasang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jum_pasang" required>
            </div>
        </div>

        <!-- <div class="form-group row" id="row_aplikasi">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Aplikasi C/DR</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="aplikasi" required>
            </div>
        </div> -->

        <div class="box-footer">

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Kirim
            </button>


        </div>
    </form>

</div>