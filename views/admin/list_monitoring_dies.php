<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">List Monitoring Master Dies</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Master Dies</th>
                            <th>Nama Produk</th>
                            <th>Revisi Ke</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Tanggal Approve</th>
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
                                <!-- <td></?php echo $md->identitas_cover ?></td>
                                <td></?php echo $md->bahan_dies ?></td>
                                <td></?php echo $md->ukuran_dies ?></td>
                                <td></?php echo $md->desain_gambar ?></td>
                                <td></?php echo $md->keterangan_desain_gambar ?></td>
                                <td></?php echo $md->kode_pr_hs_tm ?></td>
                                <td></?php echo $md->jum_pasang ?></td>
                                <td></?php echo $md->aplikasi ?></td> -->

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