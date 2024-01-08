<div class="container-fluid">

    <h4>Update Data Cylinder</h4>

    <form action="<?php echo base_url('Admin/cylinder_update_proses') ?>" method="post">

        <div class="form-group row" id="row_cylinder_id">
            <!-- <label for="colFormLabel" class="col-sm-2 col-form-label">ID Memo</label> -->
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="cylinder_id" value="<?php echo $cylinder->cylinder_id ?>">
            </div>
        </div>

        <div class="form-group row" id="row_identitas_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_cylinder" value="<?php echo $cylinder->identitas_cylinder ?>">
            </div>
        </div>

        <div class="form-group row" id="row_panjang_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Panjang Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="panjang_cylinder" value="<?php echo $cylinder->panjang_cylinder ?>">
            </div>
        </div>

        <div class="form-group row" id="row_diameter_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Diameter Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="diameter_cylinder" value="<?php echo $cylinder->diameter_cylinder ?>">
            </div>
        </div>

        <div class="form-group row" id="row_keliling_cylinder">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Keliling Cylinder</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="keliling_cylinder" value="<?php echo $cylinder->keliling_cylinder ?>">
            </div>
        </div>

        <!-- <div class="form-group row" id="row_nama_produk">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_produk" value="</?php echo $cylinder->nama_produk ?>">
            </div>
        </div> -->

        <!-- <div class="form-group row" id="row_identitas_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_cover" value="</?php echo $cylinder->identitas_cover ?>">
            </div>
        </div> -->

        <!-- <div class="form-group row" id="row_tanggal_cover_terpasang ">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pemasangan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_cover_terpasang " value="</?php echo $cylinder->tanggal_cover_terpasang ?>" readonly>
            </div>
        </div> -->

        <div class="form-group row" id="row_kondisi_cylinder ">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kondisi Cylinder</label>
            <div class="col-sm-10">
                <!-- <input type="text" class="form-control" name="kondisi_cylinder " value="</?php echo $cylinder->kondisi_cylinder ?>"> -->
                <select class="form-control" id="row_kondisi_cylinder" name="kondisi_cylinder" style=" width: 100%;">

                    <option value="Sangat Baik" <?php if ($cylinder->kondisi_cylinder == "Sangat Baik") echo "selected='selected'" ?>>Sangat Baik</option>
                    <option value="Cukup Baik" <?php if ($cylinder->kondisi_cylinder == "Cukup Baik") echo "selected='selected'" ?>>Cukup Baik</option>
                    <option value="Kurang Baik" <?php if ($cylinder->kondisi_cylinder == "Kurang Baik") echo "selected='selected'" ?>>Kurang Baik</option>
                    <option value="Baik" <?php if ($cylinder->kondisi_cylinder == "Baik") echo "selected='selected'" ?>>Baik</option>
                    <option value="Buruk" <?php if ($cylinder->kondisi_cylinder == "Buruk") echo "selected='selected'" ?>>Buruk</option>
                    <option value="Cukup Buruk" <?php if ($cylinder->kondisi_cylinder == "Cukup Buruk") echo "selected='selected'" ?>>Cukup Buruk</option>
                    <option value="Sangat Buruk" <?php if ($cylinder->kondisi_cylinder == "Sangat Buruk") echo "selected='selected'" ?>>Sangat Buruk</option>
                    <!-- <option value="</?php echo $cyl->cylinder_id ?>"></?php echo $cyl->identitas_cylinder ?></option> -->

                </select>

            </div>
        </div>

        <div class="form-group row" id="row_lokasi_cylinder ">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Lokasi Cylinder</label>
            <div class="col-sm-10">
                <!-- <input type="text" class="form-control" name="lokasi_cylinder " value="</?php echo $cylinder->lokasi_cylinder ?>"> -->
                <select class="form-control" id="row_lokasi_cylinder" name="lokasi_cylinder" style="width: 100%;" required>

                    <?php
                    foreach ($gudang as $gdg) { ?>
                        <?php
                        if ($cylinder->lokasi_cylinder == $gdg->nama_gudang) {
                        ?>
                            <option value="<?php echo $gdg->nama_gudang ?>" selected><?php echo $gdg->nama_gudang ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?php echo $gdg->nama_gudang ?>"><?php echo $gdg->nama_gudang ?></option>
                        <?php
                        }
                        ?>
                    <?php }
                    ?>
                </select>
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
                            <b>Cylinder Sudah Terupdate</b>
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