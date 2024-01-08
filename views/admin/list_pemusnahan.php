<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/add_pemusnahan') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">List Pemusnahan Cover</h2>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cover</th>
                            <th>Tanggal Pemusnahan</th>
                            <th>Bukti Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pemusnahan as $musnah) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $musnah->identitas_cover ?></td>
                                <td><?php echo date('d/m/Y', strtotime($musnah->tanggal_pemusnahan)) ?></td>
                                <!-- <td><a href="</?php echo base_url('/upload/bukti_pemusnahan/') . $musnah->file_bukti ?>"></a></td> -->
                                <!-- <td><iframe src="</?php echo base_url('/upload/bukti_pemusnahan/') . $musnah->file_bukti ?>" frameborder="0"></iframe></td> -->
                                <td><img src="<?php echo base_url('/upload/bukti_pemusnahan/') . $musnah->file_bukti ?>" alt="<?php echo base_url('/upload/bukti_pemusnahan/') . $musnah->file_bukti ?>" width="250px" height="250px"></td>
                                <td nowrap>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/detail_cover/' . $musnah->cover_id); ?>" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/edit_cover/' . $musnah->cover_id); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/cover_delete/' . $musnah->cover_id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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