<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/tambah_master_dice') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">List Master Dies</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Master Dies</th>
                            <th>Nama Produk</th>
                            <th>Revisi Ke</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Tanggal Approve</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($master_dies as $md) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $md->identitas_master_dies ?></td>
                                <td><?php echo $md->nama_produk ?></td>
                                <td><?php echo $md->revisi_ke ?></td>
                                <td><?php echo date('d/m/Y', strtotime($md->tanggal_pembuatan)) ?></td>
                                <td>
                                    <?php if ($md->tanggal_approve == '0000-00-00') {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($md->tanggal_approve));
                                    } ?>
                                </td>
                                <td nowrap>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/detail_master_dice/' . $md->master_dies_id); ?>" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/edit_dice/' . $md->master_dies_id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/dice_delete/' . $md->master_dies_id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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