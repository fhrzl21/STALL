<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">List Monitoring Cover</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>ID Cover</th>
                            <th>Ukuran</th>
                            <th>Mesh</th>
                            <th>Layer</th>
                            <th>Terpasang Cylinder</th>
                            <th>Tanggal Pasang ke Cylinder</th>
                            <th>Tanggal Lepas dari Cylinder</th>
                            <th>Tonase</th>
                            <th>Status Cover</th>
                            <th>Tanggal Pemusnahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cover as $cvr) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $cvr->nama_produk ?></td>
                                <td><?php echo $cvr->identitas_cover ?></td>
                                <td><?php echo $cvr->ukuran_cover ?></td>
                                <td><?php echo $cvr->mesh_cover ?></td>
                                <td><?php echo $cvr->layer_cover ?></td>
                                <td><?php echo $cvr->identitas_cylinder ?></td>
                                <!-- <td></?php echo date('d/m/Y', strtotime($cvr->tanggal_pasang_cover)) ?></td> -->
                                <td><?php if ($cvr->tanggal_pasang_cover == '0000-00-00' || $cvr->tanggal_pasang_cover == '') {
                                        if ($cvr->cylinder_id != 0 && $cvr->cover_id != 0) {
                                            echo " ";
                                        }
                                    } else {
                                        echo date('d/m/Y', strtotime($cvr->tanggal_pasang_cover));
                                    } ?></td>
                                <td><?php if ($cvr->tanggal_lepas_cover == '0000-00-00' || $cvr->tanggal_lepas_cover == '') {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($cvr->tanggal_lepas_cover));
                                    } ?>
                                </td>
                                <td><?php echo $cvr->tonase_cover ?></td>
                                <td><?php echo $cvr->status_cover ?></td>
                                <td><?php echo $cvr->tanggal_pemusnahan ?></td>
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
<?php
/*
<?php if ($cvr->tanggal_approve == '0000-00-00') {
    echo " ";
} else {
    echo date('d/m/Y', strtotime($cvr->tanggal_approve));
} ?>

date('d/m/Y', strtotime($cvr->tanggal_pembuatan))
*/
?>