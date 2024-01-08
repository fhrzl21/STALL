<div class="container-fluid">

    <section class="content">

        <h2>Pengiriman Cylinder</h2>

        <form action="<?php echo base_url('Admin/add_pengiriman_proses_PM3_PM10') ?>" method="post">
            <div class="form-group row" id="row_nomor_dokumen">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Pengiriman</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_dokumen" required>
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
                            <option value="<?php echo $cyl->cylinder_id ?>"><?php echo $cyl->identitas_cylinder ?> (<?php echo $cyl->nama_produk ?> - <?php echo $cyl->identitas_cover ?>) </option>

                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row" id="row_tanggal_kirim">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Kirim</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_kirim" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Pengiriman</label>
                <div class="col-sm-10">
                    <select class="form-control" id="row_asal_pengiriman" name="asal_pengiriman" style="width: 100%;" required>
                        <option value="PM3" selected="selected">PM3</option>
                        <?php
                        /*
                        foreach ($gudang as $gdg) {
                        ?>
                            <option value="<?php echo $gdg->nama_gudang ?>"><?php echo $gdg->nama_gudang ?></option>
                        <?php
                        }
                        */
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tujuan Pengiriman</label>
                <div class="col-sm-10">
                    <select class="form-control" id="row_tujuan_pengiriman" name="tujuan_pengiriman" style="width: 100%;" required>
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

            <div class="form-group row" id="row_nomor_kendaraan">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Kendaraan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_kendaraan" required>
                </div>
            </div>

            <div class="form-group row" id="row_sopir">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Sopir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sopir" required>
                </div>
            </div>

            <div class="form-group row" id="row_mengetahui">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Mengetahui</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mengetahui" required>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    Kirim
                </button>
            </div>


        </form>
    </section>
</div>