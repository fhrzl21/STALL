<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/add_pengiriman') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">Pengiriman Cylinder</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Pengiriman</th>
                            <th>ID Cyilinder</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Tujuan Pengiriman</th>
                            <th>Nomor Kendaraan</th>
                            <th>Status Pengiriman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengiriman_cylinder as $kirim) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $kirim->nomor_dokumen ?></td>
                                <td><?php echo $kirim->identitas_cylinder ?></td>
                                <td><?php echo date('d/m/Y', strtotime($kirim->tanggal_kirim)) ?></td>
                                <td><?php echo $kirim->tujuan_pengiriman ?></td>
                                <td><?php echo $kirim->nomor_kendaraan ?></td>
                                <td><?php echo $kirim->status_pengiriman ?></td>
                                <td nowrap>
                                    <div class="btn-group">
                                        <!-- <a href="</?php echo base_url('Admin/detail_cover/' . $logP->log_id); ?>" class="btn btn-success">Detail</a> -->
                                        <a href="<?php echo base_url('Admin/cetak_spJalan/' . $kirim->pengiriman_id); ?>"><button class="btn btn-success btn-sm" title="Cetak"><i class="fas fa-print"></i></button></a>
                                    </div>
                                    <div class="btn-group">
                                        <!-- <a href="</?php echo base_url('Admin/cover_delete/' . $logP->log_id); ?>" class="btn btn-danger">Hapus</a> -->
                                        <a href="<?php echo base_url('Admin/edit_pengiriman/' . $kirim->pengiriman_id); ?>"><button class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></button></a>
                                    </div>
                                    <div class="btn-group">
                                        <!-- <a href="</?php echo base_url('Admin/cover_delete/' . $logP->log_id); ?>" class="btn btn-danger">Hapus</a> -->
                                        <a href="<?php echo base_url('Admin/delete_pengiriman/' . $kirim->pengiriman_id); ?>"><button class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>



        </div>
    </div>
</div>