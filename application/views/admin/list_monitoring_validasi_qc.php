<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">List Monitoring Validasi QC</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Cylinder</th>
                            <th>ID Cover</th>
                            <th>Nama Produk</th>
                            <th>Tanggal Validasi QC PM10</th>
                            <th>Status Validasi QC PM10</th>
                            <th>Tanggal Validasi QC PM3</th>
                            <th>Status Validasi QC PM3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($log_pemasangan_cover_cylinder as $log) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $log->identitas_cylinder ?></td>
                                <td><?php echo $log->identitas_cover ?></td>
                                <td><?php echo $log->nama_produk ?></td>
                                <td>
                                    <?php if ($log->tanggal_validasi_pm10 == '0000-00-00 00:00:00' || $log->tanggal_validasi_pm10 == "") {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($log->tanggal_validasi_pm10));
                                    } ?>
                                </td>
                                <td><?php echo $log->status_validasi_pm10 ?></td>
                                <td>
                                    <?php if ($log->tanggal_validasi_pm3 == '0000-00-00 00:00:00' || $log->tanggal_validasi_pm3 == "") {
                                        echo " ";
                                    } else {
                                        echo date('d/m/Y', strtotime($log->tanggal_validasi_pm3));
                                    } ?>
                                </td>
                                <td><?php echo $log->status_validasi_pm3 ?></td>
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