<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/tambah_cover') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">List Cover</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cover</th>
                            <th>ID Master Dice</th>
                            <th>Ukuran Cover</th>
                            <th>Status Cover</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cover as $cvr) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $cvr->identitas_cover ?></td>
                                <td><?php echo $cvr->identitas_master_dies ?></td>
                                <td><?php echo $cvr->ukuran_cover ?></td>
                                <td><?php echo $cvr->status_cover ?></td>
                                <td nowrap>
                                    <?php if ($cvr->status_cover == "Sudah Di Musnahkan") {
                                        echo " "; ?>
                                    <?php } else { ?>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('Admin/detail_cover/' . $cvr->cover_id); ?>" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('Admin/edit_cover/' . $cvr->cover_id); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('Admin/cover_delete/' . $cvr->cover_id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                        </div>
                                    <?php } ?>

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