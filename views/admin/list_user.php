<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/add_user') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah data</a>
            <h2 class="m-0 font-weight-bold text-primary">List User</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Level User</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $user) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $user->username ?></td>
                                <td><?php echo $user->bagian ?></td>
                                <td nowrap>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/edit_pengiriman/' . $user->user_id); ?>"><button class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></button></a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Admin/delete_pengiriman/' . $user->user_id); ?>"><button class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></button></a>
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