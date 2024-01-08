<div class="container-fluid">

    <h2>Tambah Cover</h2>

    <form action="<?php echo base_url('Admin/cover_add_proses') ?>" method="post">

        <div class="form-group row" id="row_identitas_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_cover" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Master Dies</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_master_dies" name="identitas_master_dies" style="width: 100%;" required>
                    <option value="" selected="selected">--Pilih--</option>
                    <?php
                    foreach ($master_dies as $md) {
                    ?>
                        <option value="<?php echo $md->master_dies_id ?>"><?php echo $md->identitas_master_dies ?> - <?php echo $md->nama_produk ?> - <?php echo date('d/m/Y', strtotime($md->tanggal_approve)) ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_ukuran_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ukuran Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ukuran_cover" required>
            </div>
        </div>

        <div class="form-group row" id="row_mesh_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Mesh Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="mesh_cover" required>
            </div>
        </div>

        <div class="form-group row" id="row_layer_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Layer Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="layer_cover" required>
            </div>
        </div>

        <div class="box-footer">

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Kirim
            </button>


        </div>
    </form>

</div>