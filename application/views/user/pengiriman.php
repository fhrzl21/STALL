<div class="container-fluid">

    <section class="content">

        <h2>Pengiriman Cylinder</h2>

        <form action="" method="post">
            <div class="form-group row" id="row_nomor_pengirim">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Pengirim</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_pengirim" required>
                </div>
            </div>

            <div class="form-group row" id="row_id_cover">
                <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_cover" required>
                </div>
            </div>

            <div class="form-group row" id="row_tanggal_cetak">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Cetak</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_cetak" required>
                </div>
            </div>

            <div class="form-group row" id="row_tanggal_kirim">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Kirim</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_kirim" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tujuan Pengiriman</label>
                <div class="col-sm-10">
                    <select class="form-control" id="row_tujuan_pengiriman" name="tujuan_pengiriman" style="width: 100%;" required>
                        <option value="Produksi PM3" selected="selected">Produksi PM3</option>
                        <option value="Gudang Getas Pejaten">Gudang Getas Pejaten</option>
                    </select>
                </div>
            </div>

            <div class="form-group row" id="row_nomor_kendaraan">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Kendaraan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_kendaraan" required>
                </div>
            </div>

            <div class="form-group row" id="row_sopir">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Sopir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sopir" required>
                </div>
            </div>

            <div class="form-group row" id="row_mengetahui">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Mengetahui</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mengetahui" required>
                </div>
            </div>

            <div class="form-group row" id="row_sp_kirim">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor SP Kirim</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sp_kirim" required>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    Kirim
                </button>
            </div>


        </form>
    </section>
</div>