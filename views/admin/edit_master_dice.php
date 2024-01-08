<div class="container-fluid">

    <h4>Update Data Master Dies</h4>

    <form action="<?php echo base_url('Admin/dice_update_proses') ?>" method="post">

        <div class="form-group row" id="row_master_dice_id">
            <!-- <label for="colFormLabel" class="col-sm-2 col-form-label">ID Memo</label> -->
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="master_dies_id" value="<?php echo $master_dies->master_dies_id ?>">
            </div>
        </div>

        <div class="form-group row" id="row_identitas_master_dies">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Master Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_master_dies" value="<?php echo $master_dies->identitas_master_dies ?>">
            </div>
        </div>

        <div class="form-group row" id="row_nama_produk">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $master_dies->nama_produk ?>">
            </div>
        </div>

        <div class="form-group row" id="row_revisi_ke">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Revisi Ke</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="revisi_ke" value="<?php echo $master_dies->revisi_ke ?>">
            </div>
        </div>

        <div class="form-group row" id="row_tanggal_pembuatan">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pembuatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tanggal_pembuatan" value="<?php echo date('d/m/Y', strtotime($master_dies->tanggal_pembuatan)) ?>">
            </div>
        </div>

        <div class="form-group row" id="row_tanggal_approve">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Approve</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_approve" value="<?php echo date('d/m/Y', strtotime($master_dies->tanggal_approve)) ?>">
            </div>
        </div>

        <div class="form-group row" id="row_bahan_ukuran_dice">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bahan_dies" value="<?php echo $master_dies->bahan_dies ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan Dies</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_bahan_dies" name="bahan_dies" style="width: 100%;">
                    <option value="<?php echo $master_dies->bahan_dies ?>" selected><?php echo $master_dies->bahan_dies ?></option>
                    <?php if ($md->bahan_dies == "Besi") { ?>
                        <option value="Kuningan">Kuningan</option>
                    <?php } else { ?>
                        <option value="Besi">Besi</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_ukuran_dies">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ukuran Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ukuran_dies" value="<?php echo $master_dies->ukuran_dies ?>">
            </div>
        </div>

        <div class="form-group row" id="row_desain_gambar">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Gambar Master Dies</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="desain_gambar" value="<?php echo $master_dies->desain_gambar ?>">
            </div>
        </div>

        <div class="form-group row" id="row_keterangan_desain_gambar">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Keteranga Desain Gambar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan_desain_gambar" value="<?php echo $master_dies->keterangan_desain_gambar ?>">
            </div>
        </div>

        <div class="form-group row" id="row_kode_pr_hs_tm">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kode PR/HS/TM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_pr_hs_tm" value="<?php echo $master_dies->kode_pr_hs_tm ?>">
            </div>
        </div>

        <div class="form-group row" id="row_jum_pasang">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah Pasang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jum_pasang" value="<?php echo $master_dies->jum_pasang ?>">
            </div>
        </div>

        <div class="form-group row" id="row_aplikasi">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Aplikasi C/DR</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="aplikasi" value="<?php echo $master_dies->aplikasi ?>" readonly>
            </div>
        </div>

        <div class="box-footer">
            <!-- <button type="submit" class="btn btn-success"> Update</button> -->
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Update
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">STALL PM3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <b>Master Dice Sudah Terupdate</b>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>