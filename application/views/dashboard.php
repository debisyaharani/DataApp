<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $title; ?></title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/') ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">f
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/') ?>css/theme.css" rel="stylesheet" media="all">

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap5.min.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url('assets/') ?>images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <a href="<?php echo site_url('Welcome/DataSiswa'); ?>">Data Siswa</a>
                                <a href="<?php echo site_url('Welcome/Logout'); ?>">Logout</a>
                                <li>
                                    <a href="<?php echo site_url('welcome'); ?>">
                                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('WelcomeDataBarang'); ?>">
                                        <i class="fas fa-chart-bar"></i>Data Barang</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('welcome/logout'); ?>">
                                        <i class="fas fa-chart-bar"></i>logout</a>
                                </li>
                            </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets/') ?>images/icon/logo-bonet.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo site_url('welcome'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Welcome/VFormAddbarang'); ?>">
                                <i class="fas fa-plus"></i>Tambah Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Welcome/DataBarang'); ?>">
                                <i class="fas fa-chart-bar"></i>Data Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('welcome/logout'); ?>">
                                <i class="fas fa-sign-out-alt"></i>logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">

                        </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">



                    <?php $this->load->view($content); ?>
                    <!-- ?php  $this->load->view('admin/VBlank');?> -->


                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/') ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('assets/') ?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('assets/') ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('assets/') ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/') ?>js/main.js"></script>

    <!-- Data Table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },

                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    'colvis'

                ]
            });
        });
    </script>


</body>

</html>
<!-- end document-->