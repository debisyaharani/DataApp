<h1><i class="zmdi zmdi-book"></i> Aplikasi Data Barang</h1>


<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">Tambah Barang Baru</h2>
                    <a href="<?php echo site_url('Welcome/VFormAddBarang'); ?>">
                        <h5> klik disini</h5>
                        <div class="icon">
                            <i class="zmdi zmdi-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">Ubah Stok Barang</h2>
                    <a href="<?php echo site_url('Welcome/DataBarang'); ?>">
                        <h5>klik disini</h5>
                        <div class="icon">
                            <i class="zmdi zmdi-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">Total Barang</h2>
                    <span class="desc">
                        <h2><?php echo $CountBarang; ?></h2>
                    </span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->