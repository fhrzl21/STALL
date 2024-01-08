<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<style>
    .kop {
        border-bottom: 2px solid #000;
        margin-bottom: 20px;
        padding-bottom: 10px;
    }

    .kop h1 {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
        line-height: 1;
    }

    .kop p {
        margin: 0;
        line-height: 1;
    }

    .kop span {
        display: block;
        font-size: 14px;
        margin-top: 5px;
        line-height: 1;
    }

    .kop .alamat {
        margin-top: 10px;
        line-height: 1;
    }

    .kop img {
        max-width: 200px;
        float: left;
        margin-right: 20px;
    }
</style>

<body>
    <div class="kop">
        <img src="<?php echo base_url('asset/'); ?>img/logo.png" height="50px" width="50px" alt="Logo Pura">
        <h1>PURA BARU TAMA UNIT PAPER MILL 10</h1>
        <p>Jl. AKBP Agil Kusumadya, Jatimakmur, Jati Wetan, Kec. Jati, Kabupaten Kudus, Jawa Tengah 59347</p>
        <!-- <span>Telp. (021) 291 444361 | Email: cs_security@kudus.puragroup.com</span> -->

    </div>
    <div id="cetakSP">
        <h2 style="text-align: center;">SP Langsir Cyilder (PM10-PM3)</h2>
        <h3 style="text-align: center;"><?php echo $pengiriman_cylinder->nomor_dokumen ?></h3>
        <table id="header" style="margin : auto; width: 100%;">
            <tr>
                <td>Dari</td>
                <td>:</td>
                <td><?php echo $pengiriman_cylinder->asal_pengiriman ?></td>
                <td>Nomor Kendaraan</td>
                <td>:</td>
                <td><?php echo $pengiriman_cylinder->nomor_kendaraan ?></td>
            </tr>

            <tr>
                <td>Tujuan</td>
                <td>:</td>
                <td style="width : 53%"><?php echo $pengiriman_cylinder->tujuan_pengiriman ?></td>
                <td>Nama Sopir</td>
                <td>:</td>
                <td><?php echo $pengiriman_cylinder->sopir ?></td>
            </tr>
        </table>
        <br><br>
        <table style="border : 1px solid; border-collapse : collapse; margin : auto; width: 100%;">
            <thead style=" border : 1px solid; border-collapse : collapse;">
                <th style=" border : 1px solid; border-collapse : collapse;">ID Cyilinder</th>
                <th style=" border : 1px solid; border-collapse : collapse;">Nama Produk</th>
                <th style=" border : 1px solid; border-collapse : collapse;">Tanggal Pengiriman</th>
                <th style=" border : 1px solid; border-collapse : collapse;">Tujuan Pengiriman</th>
                <th style=" border : 1px solid; border-collapse : collapse;">Tanggal dokumen Terbuat</th>
            </thead>
            <tbody style=" border : 1px solid; border-collapse : collapse;">
                <td style=" border : 1px solid; border-collapse : collapse; text-align:center;"><?php echo $pengiriman_cylinder->identitas_cylinder ?></td>
                <td style=" border : 1px solid; border-collapse : collapse; text-align:center;"><?php echo $pengiriman_cylinder->nama_produk ?></td>
                <td style=" border : 1px solid; border-collapse : collapse; text-align:center;"><?php echo date('d-m-Y', strtotime($pengiriman_cylinder->tanggal_kirim)) ?></td>
                <td style=" border : 1px solid; border-collapse : collapse; text-align:center;"><?php echo $pengiriman_cylinder->tujuan_pengiriman ?></td>
                <td style=" border : 1px solid; border-collapse : collapse; text-align:center;"><?php echo date('d-m-Y' . ' ' . 'H:m:s', strtotime($pengiriman_cylinder->created_pengiriman)) ?></td>
            </tbody>
        </table>
        <br><br>

        <table style="width: 100%;">
            <td style="text-align: right;">Kudus, <?php echo date('d-m-Y', strtotime($pengiriman_cylinder->created_pengiriman)) ?></td>
        </table>
        <br>
        <table style="margin: auto; width: 100%;">
            <thead>
                <th style="width : 25%;">Penerima</th>
                <th style="width : 25%;">Security</th>
                <th style="width : 25%;">Sopir</th>
                <th style="width : 25%;">Mengetahui</th>
            </thead>

            <tbody>
                <td style="width : 25%; text-align:center;"><br><br><br><br>(_______________)</td>
                <td style="width : 25%; text-align:center;"><br><br><br><br>(_______________)</td>
                <td style="width : 25%; text-align:center;"><br><br><br><br>(<?php echo $pengiriman_cylinder->sopir ?>)</td>
                <td style="width : 25%; text-align:center;"><br><br><br><br>(<?php echo $pengiriman_cylinder->mengetahui ?>)</td>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>