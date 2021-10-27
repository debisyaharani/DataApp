<div class="card">
    <div class="card-header">
        <strong>Ubah Data</strong> Barang
    </div>
    <div class="card-body card-block">
        <form action="<?php echo site_url('Welcome/UpdateDataBarang'); ?>" method="post" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-1">
                    <label class=" form-control-label">Nama Barang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input name="nama_barang" type="text" placeholder="Enter Email..." class="form-control" value="<?php echo $detail['nama_barang']; ?>">
                    <input name="id_barang" type="hidden" placeholder="Enter Email..." class="form-control" value="<?php echo $detail['id_barang']; ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1">
                    <label class=" form-control-label">Stok Barang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input name="stok" type="text" placeholder="Enter Email..." class="form-control" value="<?php echo $detail['stok']; ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1">
                    <label for="hf-password" class=" form-control-label">Tanggal Masuk</label>
                </div>
                <div class="col-12 col-md-9">
                    <input name="tgl_masuk" type="date" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control" value="<?php echo $detail['tgl_masuk']; ?>">
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>

        </form>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>