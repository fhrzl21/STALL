<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="btn-group float-right">
                <a href="<?php echo base_url('Admin/list_master_dice'); ?>" class="btn btn-primary">Back</a>
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
                            <td>ID Master Dies</td>
                            <td><?php echo $master_dies->identitas_master_dies ?></td>
                        </tr>
                        <tr>
                            <td>Nama Produk</td>
                            <td><?php echo $master_dies->nama_produk ?></td>
                        </tr>
                        <tr>
                            <td>Revisi Ke</td>
                            <td><?php echo $master_dies->revisi_ke ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pembuatan</td>
                            <td><?php echo date('d/m/Y', strtotime($master_dies->tanggal_pembuatan)) ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Approve</td>
                            <td><?php echo date('d/m/Y', strtotime($master_dies->tanggal_approve)) ?></td>

                        </tr>
                        <tr>
                            <td>Bahan Dies</td>
                            <td><?php echo $master_dies->bahan_dies ?></td>
                        </tr>
                        <tr>
                            <td>Ukuran Dies</td>
                            <td><?php echo $master_dies->ukuran_dies ?></td>
                        </tr>
                        <tr>
                            <td>Gambar Master Dies</td>
                            <td><?php echo $master_dies->desain_gambar ?></td>
                        </tr>
                        <tr>
                            <td>Keteranga Gambar Master Dies</td>
                            <td><?php echo $master_dies->keterangan_desain_gambar ?></td>
                        </tr>
                        <tr>
                            <td>Kode PR/HS/TM</td>
                            <td><?php echo $master_dies->kode_pr_hs_tm ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pasang</td>
                            <td><?php echo $master_dies->jum_pasang ?></td>
                        </tr>
                        <tr>
                            <td>Aplikasi C/DR</td>
                            <td><?php echo $master_dies->aplikasi ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>