<div class="container-fluid">

    <h2>Tambah Cylinder</h2>

    <form action="<?php echo base_url('Admin/cylinder_add_proses') ?>" method="post">

        <div class="form-group row" id="row_identitas_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_cylinder" required>
            </div>
        </div>

        <div class="form-group row" id="row_panjang_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Panjang Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="panjang_cylinder" required>
            </div>
        </div>

        <div class="form-group row" id="row_diameter_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Diameter Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="diameter_cylinder" required>
            </div>
        </div>

        <div class="form-group row" id="row_keliling_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Keliling Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="keliling_cylinder" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kondisi Cylinder</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_kondisi_cylinder" name="kondisi_cylinder" style="width: 100%;">
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
                <select class="form-control" id="row_lokasi_cylinder" name="lokasi_cylinder" style="width: 100%;" required>
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

        <!-- <div class="form-group row" id="row_status_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Status Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="status_cylinder">
            </div>
        </div> -->

        <!-- <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Status Cylinder</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_status_cylinder" name="status_cylinder" style="width: 100%;">
                    <option value="Tepasang Cover" selected="selected">Terpasang Cover</option>
                    <option value="Tidak Ada Cover">Tidak Ada Cover</option>
                </select>
            </div>
        </div> -->

        <div class="box-footer">

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Simpan
            </button>


        </div>
    </form>

</div>