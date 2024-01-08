<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <a href="</?php echo base_url('Admin/add_pasang_cover') ?>" class="btn btn-primary float-right">Tambah data</a> -->
            <h2 class="m-0 font-weight-bold text-primary">Pelepasan Cover Cylinder</h2>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cover</th>
                            <th>Terpasang pada ID Cylinder</th>
                            <th>Kondisi Cover</th>
                            <!-- <th>Tonase</th> -->
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($log_pemasangan_cover_cylinder as $logP) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $logP->identitas_cover ?></td>
                                <td><?php echo $logP->identitas_cylinder ?></td>
                                <td><?php echo $logP->kondisi_cover ?></td>
                                <!-- <td></?php echo $logP->tonase_cover ?></td> -->
                                <td><?php echo $logP->lokasi_cover ?></td>
                                <td>
                                    <!-- <div class="btn-group">
                                        <a href="</?php echo base_url('Admin/detail_cover/' . $logP->log_id); ?>" class="btn btn-success">Detail</a>
                                    </div> -->
                                    <?php if (empty($logP->tanggal_lepas_cover) || $logP->tanggal_lepas_cover == "0000-00-00") { ?>
                                        <div class="btn-group">
                                            <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#lepasModal-<?= $no ?>"><i class="fas fa-eject"></i> Lepas</a>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="lepasModal-<?= $no ?>" tabindex="-1" aria-labelledby="lepasModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="lepasModalLabel">STALL PM3</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <b class="test">Apakah Anda Yakin Melepas Cover Cylinder?</b>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo base_url('Admin/lepas_cover_proses/' . $logP->log_id . '/' . $logP->cover_id . '/' . $logP->cylinder_id); ?>" class="bt-lepas"><button type="button" class="btn btn-warning">Ya</button></a>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">tidak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- <div class="btn-group">
                                        <a href="</?php echo base_url('Admin/cover_delete/' . $logP->log_id); ?>" class="btn btn-danger">Hapus</a>
                                    </div> -->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="box-footer">
                <!-- <button type="submit" class="btn btn-success"> Update</button> -->
                <!-- Button trigger modal -->
                <!-- <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#lepasModal">
                    Update
                </button> -->


            </div>

        </div>
    </div>
</div>