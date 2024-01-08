<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/add_pasang_cover') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">Pasang Cover Cylinder</h2>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cover</th>
                            <th>Terpasang pada ID Cylinder</th>
                            <th>Nama Produk</th>
                            <th>Tanggal Pasang Cover Cylinder</th>
                            <th>Kondisi Cylinder</th>
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
                                <td><?php echo $logP->nama_produk ?></td>
                                <td><?php echo date('d/m/Y', strtotime($logP->tanggal_cover_terpasang)) ?></td>
                                <td><?php echo $logP->kondisi_cylinder ?></td>
                                <td><?php echo $logP->lokasi_cylinder ?></td>
                                <td nowrap>
                                    <!-- <div class="btn-group">
                                        <a href="</?php echo base_url('Admin/detail_cover/' . $logP->log_id); ?>" class="btn btn-success">Detail</a>
                                    </div> -->
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/edit_pasang_cover/' . $logP->log_id); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/cover_delete/' . $logP->log_id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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