<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="btn-group float-right">
                <a href="<?php echo base_url('Admin/list_cylinder'); ?>" class="btn btn-primary">Back</a>
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
                            <td>ID Cylinder</td>
                            <td><?php echo $cylinder->identitas_cylinder ?></td>
                        </tr>
                        <tr>
                            <td>Panjang Cylinder</td>
                            <td><?php echo $cylinder->panjang_cylinder ?></td>
                        </tr>
                        <tr>
                            <td>Diameter Cylinder</td>
                            <td><?php echo $cylinder->diameter_cylinder ?></td>
                        </tr>
                        <tr>
                            <td>Keliling Cylinder</td>
                            <td><?php echo $cylinder->keliling_cylinder ?></td>
                        </tr>
                        <!-- <tr>
                            <td>Nama Produk</td>
                            <td><//?php echo $cylinder->nama_produk ?></td>
                        </tr> -->
                        <tr>
                            <td>ID Cover</td>
                            <td><?php if ($cylinder->identitas_cover == "") { ?>
                                <?php } else { ?>
                                    <?php echo $cylinder->identitas_cover ?>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Cover Terpasang</td>
                            <td>
                                <?php if ($cylinder->tanggal_cover_terpasang == 0000 - 00 - 00) { ?>
                                <?php } else { ?>
                                    <?php echo date('d/m/Y', strtotime($cylinder->tanggal_cover_terpasang)) ?>
                                <?php } ?></td>
                        </tr>
                        <tr>
                            <td>Kondisi Cylinder</td>
                            <td><?php echo $cylinder->kondisi_cylinder ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Cylinder</td>
                            <td><?php echo $cylinder->lokasi_cylinder ?></td>
                        </tr>
                        <tr>
                            <td>Status Cylinder</td>
                            <td><?php echo $cylinder->status_cylinder ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>