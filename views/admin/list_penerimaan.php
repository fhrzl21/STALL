<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <a href="</?php echo base_url('Admin/add_pengiriman') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a> -->
            <h2 class="m-0 font-weight-bold text-primary">Penerimaan Cylinder</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Pengiriman</th>
                            <th>ID Cyilinder</th>
                            <th>Tanggal Kirim</th>
                            <th>Nomor Kendaraan</th>
                            <th>Tanggal Terima</th>
                            <th>Status Pengiriman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengiriman_cylinder as $terima) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $terima->nomor_dokumen ?></td>
                                <td><?php echo $terima->identitas_cylinder ?></td>
                                <td><?php echo date('d/m/Y', strtotime($terima->tanggal_kirim)) ?></td>
                                <td><?php echo $terima->nomor_kendaraan ?></td>
                                <td><?php if ($terima->tanggal_terima == '0000-00-00') {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($terima->tanggal_terima));
                                    } ?>
                                </td>
                                <td><?php echo $terima->status_pengiriman ?></td>
                                <td>
                                    <div class="btn-group">
                                        <?php if ($terima->status_pengiriman == "Diterima") {
                                            echo " ";
                                        } else { ?>
                                            <div class="btn-group">
                                                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $terima->pengiriman_id ?>"><i class="fas fa-check"></i> Terima</a>
                                            </div>
                                        <?php } ?>


                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?php echo $terima->pengiriman_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">STALL PM3</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <b>Apakah Anda Yakin Menerima Pengiriman Cylinder?</b>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('Admin/terima_kiriman_proses/' . $terima->pengiriman_id); ?>"><button type="button" class="btn btn-warning">Ya</button></a>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">tidak</button>
                                        </div>
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
            <!-- <button type="submit" class="btn btn-success"> Update</button> -->
            <!-- Button trigger modal -->
            <!-- <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Update
                </button> -->

            <!-- Modal -->

        </div>

    </div>
</div>