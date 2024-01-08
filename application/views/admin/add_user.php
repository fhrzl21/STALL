<div class="container-fluid">

    <h2>Tambah User</h2>

    <form action="<?php echo base_url('Admin/user_add_proses') ?>" method="post">

        <div class="form-group row" id="row_username">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" required>
            </div>
        </div>

        <div class="form-group row" id="row_password">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Bagian User</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_bagian" name="bagian" style="width: 100%;" required>
                    <option value="" selected="selected">--Pilih--</option>
                    <?php
                    foreach ($tingkatan_user as $tl) {
                    ?>
                        <option value="<?php echo $tl->level_user ?>"><?php echo $tl->bagian ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="box-footer">

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Kirim
            </button>


        </div>
    </form>

</div>