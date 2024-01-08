<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">List Monitoring Cylinder</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>ID Cylinder</th>
                            <th>Panjang Cylinder</th>
                            <th>Diameter</th>
                            <th>Keliling Cylinder</th>
                            <th>Nama Produk</th>
                            <th>ID Cover</th>
                            <th>ID Master Dies</th>
                            <th>Tanggal Pasang Cover</th>
                            <th>Kondisi Cylinder</th>
                            <th>Lokasi Cylinder</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cylinder as $cyl) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $cyl->nama_produk ?></td>
                                <td><?php echo $cyl->identitas_cylinder ?></td>
                                <td><?php echo $cyl->panjang_cylinder ?></td>
                                <td><?php echo $cyl->diameter_cylinder ?></td>
                                <td><?php echo $cyl->keliling_cylinder ?></td>
                                <td><?php echo $cyl->nama_produk ?></td>
                                <td><?php echo $cyl->identitas_cover ?></td>
                                <td><?php echo $cyl->identitas_master_dies ?></td>
                                <td>
                                    <?php if ($cyl->tanggal_pasang_cover == '0000-00-00' || $cyl->tanggal_pasang_cover == "") {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($cyl->tanggal_pasang_cover));
                                    } ?>
                                </td>
                                <td><?php echo $cyl->kondisi_cylinder ?></td>
                                <td><?php echo $cyl->lokasi_cylinder ?></td>
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