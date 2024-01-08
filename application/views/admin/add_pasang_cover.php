<div class="container-fluid">

    <h2>Pemasangan Cover Cylinder</h2>

    <form action="<?php echo base_url('Admin/pasangCvr_add_proses') ?>" method="post">

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_cover" name="identitas_cover" style="width: 100%;" required>
                    <option value="" selected="selected">--Pilih--</option>
                    <?php
                    foreach ($cover as $cvr) {
                    ?>
                        <option value="<?php echo $cvr->cover_id ?>"><?php echo $cvr->identitas_cover ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cylinder</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_cylinder" name="identitas_cylinder" style="width: 100%;" required>
                    <option value="" selected="selected">--Pilih--</option>
                    <?php
                    foreach ($cylinder as $cyl) {
                    ?>
                        <option value="<?php echo $cyl->cylinder_id ?>">ID :<?php echo $cyl->identitas_cylinder ?> | Panjang: <?php echo $cyl->panjang_cylinder ?> | Diameter: <?php echo $cyl->diameter_cylinder ?> | Keliling: <?php echo $cyl->keliling_cylinder ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_tanggal_pasang_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pasang Cover</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_pasang_cover" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kondisi Cover</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_kondisi_cover" name="kondisi_cover" style="width: 100%;">
                    <option value="Sangat Baik" selected="selected">Sangat Baik</option>
                    <option value="Cukup Baik">Cukup Baik</option>
                    <option value="Kurang Baik">Kurang Baik</option>
                    <option value="Baik">Baik</option>
                    <option value="Buruk">Buruk</option>
                    <option value="Cukup Buruk">Cukup Buruk</option>
                    <option value="Sangat Buruk">Sangat Buruk</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_lokasi_cover" name="lokasi_cover" style="width: 100%;" required>
                    <option value="" selected="selected">--Pilih--</option>
                    <?php
                    foreach ($gudang as $gdg) {
                    ?>
                        <option value="<?php echo $gdg->nama_gudang ?>"><?php echo $gdg->nama_gudang ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="box-footer">

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Kirim
            </button>


        </div>
    </form>

</div>