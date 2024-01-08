<div class="container-fluid">

    <h4>Pelepasan Cover Cylinder</h4>

    <form action="<?php echo base_url('Admin/lepas_cover_proses') ?>" method="post">
        <div class="form-group row" id="row_log_id">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="log_id" value="<?php echo $log_pemasangan_cover_cylinder->log_id ?>">
            </div>
        </div>

        <input type="hidden" class="form-control" name="identitas_cover_lama" value="<?php echo $log_pemasangan_cover_cylinder->cover_id ?>">

        <!-- <div class="form-group row" id="row_identitas_cover_lama">
            <div class="col-sm-10">
            </div>
        </div> -->

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_cover" name="identitas_cover" style="width: 100%;" required>
                    <?php
                    foreach ($cover as $cvr) {
                    ?>
                        <?php
                        if ($log_pemasangan_cover_cylinder->cover_id == $cvr->cover_id) {
                        ?>
                            <option value="<?php echo $cvr->cover_id ?>" selected><?php echo $cvr->identitas_cover ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?php echo $cvr->cover_id ?>"><?php echo $cvr->identitas_cover ?></option>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <input type="hidden" class="form-control" name="identitas_cylinder_lama" value="<?php echo $log_pemasangan_cover_cylinder->cylinder_id ?>">

        <!-- <div class="form-group row" id="row_identitas_cylinder_lama">
            <div class="col-sm-10">
            </div>
        </div> -->

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cylinder</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_cylinder" name="identitas_cylinder" style="width: 100%;" required>
                    <?php
                    foreach ($cylinder as $cyl) {
                    ?>
                        <?php
                        if ($log_pemasangan_cover_cylinder->cylinder_id == $cyl->cylinder_id) {
                        ?>
                            <option value="<?php echo $cyl->cylinder_id ?>" selected><?php echo $cyl->identitas_cylinder ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?php echo $cyl->cylinder_id ?>"><?php echo $cyl->identitas_cylinder ?></option>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_tanggal_pasang_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pasang Cover</label>
            <div class="col-sm-10">
                <input type="date" value="<?php echo date('Y-m-d', strtotime($log_pemasangan_cover_cylinder->tanggal_pasang_cover)) ?>" class="form-control" name="tanggal_pasang_cover" required>
            </div>
        </div>

        <div class="form-group row" id="row_tanggal_lepas_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pasang Cover</label>
            <div class="col-sm-10">
                <input type="date" value="<?php echo date('Y-m-d', strtotime($log_pemasangan_cover_cylinder->tanggal_lepas_cover)) ?>" class="form-control" name="tanggal_lepas_cover" required>
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

        <div class="form-group row" id="row_tonase_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tonase Tercapai</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tonase_cover" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_lokasi_cover" name="lokasi_cover" style="width: 100%;" required>
                    <?php
                    foreach ($gudang as $gdg) {
                    ?>
                        <?php
                        if ($log_pemasangan_cover_cylinder->lokasi_cover == $gdg->nama_gudang) {
                        ?>
                            <option value="<?php echo $gdg->nama_gudang ?>" selected><?php echo $gdg->nama_gudang ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?php echo $gdg->nama_gudang ?>"><?php echo $gdg->nama_gudang ?></option>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>




        <div class="box-footer">

            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                Pelepasan
            </button>


        </div>
    </form>

</div>