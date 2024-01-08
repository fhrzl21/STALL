<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/tambah_cylinder') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">List Cylinder</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cylinder</th>
                            <th>Panjang Cylinder</th>
                            <th>Diameyer Cylinder</th>
                            <th>Keliling Cylinder</th>
                            <th>Terpasang Cover</th>
                            <!-- <th>Nama Produk</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cylinder as $cyl) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $cyl->identitas_cylinder ?></td>
                                <td><?php echo $cyl->panjang_cylinder ?></td>
                                <td><?php echo $cyl->diameter_cylinder ?></td>
                                <td><?php echo $cyl->keliling_cylinder ?></td>
                                <td><?php echo $cyl->identitas_cover ?></td>
                                <td nowrap>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/detail_cylinder/' . $cyl->cylinder_id); ?>" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/edit_cylinder/' . $cyl->cylinder_id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/cylinder_delete/' . $cyl->cylinder_id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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