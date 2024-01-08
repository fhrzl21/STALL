<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="btn-group float-right">
                <a href="<?php echo base_url('Admin/list_cover'); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="btn-group float-right">
                <a href="<?php echo base_url('Admin'); ?>" class="btn btn-success">Cetak</a>
            </div>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>ID Cover</td>
                            <td><?php echo $cover->identitas_cover ?></td>
                        </tr>
                        <tr>
                            <td>ID Master Dice</td>
                            <td><?php echo $cover->identitas_master_dies ?></td>
                        </tr>
                        <tr>
                            <td>Ukuran Cover</td>
                            <td><?php echo $cover->ukuran_cover ?></td>
                        </tr>
                        <tr>
                            <td>Mesh</td>
                            <td><?php echo $cover->mesh_cover ?></td>
                        </tr>
                        <tr>
                            <td>Layer</td>
                            <td><?php echo $cover->layer_cover ?></td>
                        </tr>
                        <tr>
                            <td>Status cover</td>
                            <td><?php echo $cover->status_cover ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>