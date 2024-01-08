<div class="container-fluid">

    <h4>Update Data Cover</h4>

    <form action="<?php echo base_url('Admin/cover_update_proses') ?>" method="post">

        <div class="form-group row" id="row_cover_id">
            <!-- <label for="colFormLabel" class="col-sm-2 col-form-label">ID Memo</label> -->
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="cover_id" value="<?php echo $cover->cover_id ?>">
            </div>
        </div>

        <div class="form-group row" id="row_identitas_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="identitas_cover" value="<?php echo $cover->identitas_cover ?>">
            </div>
        </div>

        <!-- <div class="form-group row" id="row_identitas_master_dice">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Master Dice</label>
            <div class="col-sm-10"> -->
        <!-- <input type="text" class="form-control" name="identitas_master_dice" value="</?php echo $cover->identitas_master_dies ?>"> -->
        <!-- </div>
        </div> -->

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Master Dies</label>
            <div class="col-sm-10">
                <select class="form-control" id="row_identitas_master_dice" name="identitas_master_dice" style="width: 100%;">
                    <?php
                    foreach ($master_dies as $md) { ?>
                        <?php
                        if ($cover->master_dies_id == $md->identitas_master_dies) { ?>
                            <option value="<?php echo $md->identitas_master_dies ?>" selected><?php echo $md->identitas_master_dies ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?php echo $md->identitas_master_dies ?>"><?php echo $md->identitas_master_dies ?></option>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row" id="row_ukuran_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Ukuran Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ukuran_cover" value="<?php echo $cover->ukuran_cover ?>">
            </div>
        </div>

        <div class="form-group row" id="row_mesh_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Mesh Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="mesh_cover" value="<?php echo $cover->mesh_cover ?>">
            </div>
        </div>

        <div class="form-group row" id="row_layer_cover">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Layer Cover</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="layer_cover" value="<?php echo $cover->layer_cover ?>">
            </div>
        </div>

        <div class="box-footer">
            <!-- <button type="submit" class="btn btn-success"> Update</button> -->
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Update
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">STALL PM3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <b>Cover Sudah Terupdate</b>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>