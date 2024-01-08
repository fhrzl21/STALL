<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <a href="</?php echo base_url('Admin/add_pengiriman') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a> -->
            <h2 class="m-0 font-weight-bold text-primary">Pemasangan Cylinder Ke Mesin</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cyilinder</th>
                            <th>ID Cover</th>
                            <th>Nama Produk</th>
                            <th>Tanggal Pemasangan Ke Mesin</th>
                            <th>Status Pemasangan Mesin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pemasangan_cylinder_mesin as $pasang) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $pasang->identitas_cylinder ?></td>
                                <td><?php echo $pasang->identitas_cover ?></td>
                                <td><?php echo $pasang->nama_produk ?></td>
                                <td>
                                    <?php if ($pasang->tanggal_pasang_mesin == NULL || $pasang->tanggal_pasang_mesin == "") {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($pasang->tanggal_pasang_mesin));
                                    } ?>
                                </td>
                                <td><?php echo $pasang->status_pemasangan_mesin ?></td>
                                <td>
                                    <div class="btn-group">
                                        <?php
                                        if (empty($terpasang)) { ?>
                                            <div class="btn-group">
                                                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#pasangModal<?php echo $pasang->cylinder_id ?>"><i class="fas fa-check"></i> Pasang</a>
                                            </div>
                                        <?php } else { ?>
                                            <?php if ($pasang->cylinder_id == $cylinder_id_terpasang) { ?>
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#lepasModal<?php echo $pasang->cylinder_id ?>"><i class="fas fa-eject"></i> Lepas</a>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>

                                    </div>
                                </td>

                            </tr>

                            <div class="modal fade" id="pasangModal<?php echo $pasang->cylinder_id ?>" tabindex="-1" aria-labelledby="pasangModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">STALL PM3</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <b>Apakah Anda Yakin Memasang Cylinder Ke Mesin?</b>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('Admin/install_cylinder_mesin_proses/' . $pasang->cylinder_id . '/' . $pasang->cover_id); ?>"><button type="button" class="btn btn-warning">Ya</button></a>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="lepasModal<?php echo $pasang->cylinder_id ?>" tabindex="-1" aria-labelledby="lepasModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">STALL PM3</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo base_url('Admin/uninstall_cylinder_mesin_proses') ?>" method="post">
                                            <div class="modal-body">
                                                <b>Apakah Anda Yakin Melepas Cylinder Dari Mesin Mesin?</b>
                                                <input type="hidden" name="pemasangan_id" value="<?php echo $pasang->pemasangan_id ?>">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label">Tonase Cover</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="tonase_cover" required>
                                                </div>
                                                <label for="colFormLabel" class="col-sm-4 col-form-label">Alasan Pelepasan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="alasan_pelepasan" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-warning">Lepas</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="box-footer">

        </div>

    </div>
</div>