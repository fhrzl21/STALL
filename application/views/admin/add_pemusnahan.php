<div class="container-fluid">

    <section class="content">

        <h2>Pemusnahan Cover</h2>

        <?php if ($this->session->flashdata('msg')) { ?>
            <div class="alert alert-success"> <?php echo $this->session->flashdata('msg') ?> </div>
        <?php
        }
        ?>
        <form action="<?php echo base_url('Admin/add_pemusnahan_proses') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row" id="row_nomor_dokumen_pemusnahan">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Perintah Pemusnahan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_dokumen_pemusnahan" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
                <div class="col-sm-10">
                    <select class="form-control" id="row_identitas_cover" name="identitas_cover" style="width: 100%;" required>
                        <option value="" selected="selected">--Pilih--</option>
                        <?php
                        foreach ($cover as $cvr) {
                        ?>
                            <option value="<?php echo $cvr->cover_id ?>"><?php echo $cvr->identitas_cover ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row" id="row_tanggal_pemusnahan">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pemusnahan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_pemusnahan" required>
                </div>
            </div>

            <div class="form-group row" id="row_file_bukti">
                <label class="col-sm-2 col-form-label" for="file_bukti">Upload Bukti Pemusnahan</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="file_bukti" required />
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