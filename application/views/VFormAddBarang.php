<h3><i class="fas fa-plus"></i> Tambah data Barang</h3>

<br>

<div class="card">
    <div class="card-header">
        <strong>Tambah Barang</strong> Baru
    </div>
    <div class="card-body card-block">
        <form action="<?php echo site_url('Welcome/AddDataBarang'); ?>" method="post" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-1">
                    <label class=" form-control-label">Nama Barang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input name="nama_barang" type="text" placeholder="Nama Barang" class="form-control" required>
                    <input name="id_barang" type="hidden" placeholder="Enter Email..." class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1">
                    <label class=" form-control-label">Stok Barang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input name="stok" type="text" placeholder="Enter Stok Barang" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1">
                    <label for="hf-password" class=" form-control-label">Tanggal Masuk</label>
                </div>
                <div class="col-12 col-md-9">
                    <input name="tgl_masuk" type="date" id="hf-password" name="hf-password" placeholder="" class="form-control" required>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>

        </form>

    </div>
</div>

<br>
<br>


<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>nama barang</th>
                        <th>Stok</th>
                        <th>Tanggal Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($DataBarang as $DataBarangS) : ?>
                        <tr>
                            <td>
                                <?php echo $DataBarangS->nama_barang ?>
                            </td>
                            <td>
                                <?php echo $DataBarangS->stok ?>
                            </td>
                            <td>
                                <?php echo $DataBarangS->tgl_masuk ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>