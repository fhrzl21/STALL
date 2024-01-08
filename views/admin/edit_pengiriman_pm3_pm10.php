<div class="container-fluid">

    <h4>Update Pengiriman Cylinder Cover</h4>

    <form action="<?php echo base_url('Admin/pengiriman_update_proses_pm3_pm10') ?>" method="post">
        <div class="form-group row" id="row_pengiriman_id">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="pengiriman_id" value="<?php echo $pengiriman_cylinder->pengiriman_id ?>">
            </div>
        </div>

        <div class="form-group row" id="row_nomor_dokumen">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Pengiriman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nomor_dokumen" value="<?php echo $pengiriman_cylinder->nomor_dokumen ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cylinder</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_cylinder" name="identitas_cylinder" style="width: 100%;" required>
                    <?php
                    foreach ($cylinder as $cyl) {
                    ?>
                        <?php

                        if ($pengiriman_cylinder->cylinder_id == $cyl->cylinder_id) {
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

        <div class="form-group row" id="row_tanggal_kirim">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Kirim</label>
            <div class="col-sm-10">
                <input type="date" value="<?php echo date('Y-m-d', strtotime($pengiriman_cylinder->tanggal_kirim)) ?>" class="form-control" name="tanggal_kirim" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Pengiriman</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_asal_pengiriman" name="asal_pengiriman" style="width: 100%;" required>
                    <?php
                    foreach ($gudang as $gdg) {
                    ?>
                        <?php
                        if ($pengiriman_cylinder->asal_pengiriman == $gdg->nama_gudang) {
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

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tujuan Pengiriman</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_tujuan_pengiriman" name="tujuan_pengiriman" style="width: 100%;" required>
                    <?php
                    foreach ($gudang as $gdg) {
                    ?>
                        <?php
                        if ($pengiriman_cylinder->tujuan_pengiriman == $gdg->nama_gudang) {
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

        <div class="form-group row" id="row_nomor_kendaraan">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Kendaraan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nomor_kendaraan" value="<?php echo $pengiriman_cylinder->nomor_kendaraan ?>">
            </div>
        </div>

        <div class="form-group row" id="row_sopir">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Sopir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sopir" value="<?php echo $pengiriman_cylinder->sopir ?>">
            </div>
        </div>

        <div class="form-group row" id="row_mengetahui">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Mengetahui</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="mengetahui" value="<?php echo $pengiriman_cylinder->mengetahui ?>">
            </div>
        </div>


        <div class="box-footer">

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Update
            </button>

        </div>
    </form>

</div>