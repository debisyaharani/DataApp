<h1><?php echo $title; ?></h1>

<br>


<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table id="example" class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>id barang</th>
                        <th>nama barang</th>
                        <th>Stok</th>
                        <th>Tanggal Masuk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($DataBarang as $DataBarangS) : ?>
                        <tr>
                            <td width="150">
                                <?php echo $DataBarangS->id_barang ?>
                            </td>
                            <td>
                                <?php echo $DataBarangS->nama_barang ?>
                            </td>
                            <td>
                                <?php echo $DataBarangS->stok ?>
                            </td>
                            <td>
                                <?php echo $DataBarangS->tgl_masuk ?>
                            </td>

                            <td width="250">
                                <a href="<?php echo site_url('welcome/DataBarang/' . $DataBarangS->id_barang . '/view') ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-small text-danger" href="<?php echo site_url('welcome/DeleteDataBarang/' . $DataBarangS->id_barang) ?>" onclick="return confirm('Anda mau menghapus data ini?')"><i class="fas fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>