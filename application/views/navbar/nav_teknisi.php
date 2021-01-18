<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tiket</title>
    <!-- General CSS Files -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script type="text/javascript" src=<?= base_url('assets/ckeditor/ckeditor.js') ?>></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- CSS Libraries -->
    <style>
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        thead input {
            width: 80%;
        }

        #Option {
            visibility: hidden;
        }

        body {
            background: #fcfcfc;
        }

        h1 {
            text-align: center;
            font-family: sans-serif;
            font-weight: 300;
            color: #fff;
        }

        .tombol {
            padding: 8px 15px;
            border-radius: 3px;
            background: #ECF0F1;
            border: none;
            color: #232323;
            font-size: 12pt;
        }

        .kotak {
            margin: 20px auto;
            background: #1ABC9C;
            width: 900px;
            padding: 20px 50px 50px 50px;
            border-radius: 3px;
        }
    </style>
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>
</head>
<?php
$url = explode('/', uri_string());
if (!isset($url[1])) {
    $url[1] = 'index';
}
$active = $url[1];
?>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:4px !important;" src="http://localhost/Sidayan/assets/stisla-assets/img/avatar/avatar-1.png" class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Selamat datang, <?php echo $nama; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title"><?php echo $nama; ?></div>
                            <a href="<?= base_url('welcome/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <a href="<?= base_url('teknisi') ?>" style="font-size: 35px; font-weight:900;font-family: 'Roboto', sans-serif;" class="text-success">&#9795;Tiket.&not;</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('teknisi') ?>">TKT</a>
                    </div>

                    <ul class="sidebar-menu">
                        
                        <li class="menu-header">Manajemen Asset</li>
                        <li class="nav-item dropdown <?php if ($active == 'data_peminjaman' || $active == 'add_peminjaman') : ?> active <?php endif ?>">
                            <a href="<?= base_url('teknisi/list_assets') ?>" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>IT Assets</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Access Point</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Router</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Switch</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Server</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Firewall</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">IP Phone</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">NTP</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Rack</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Room Sensor</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Smart Phone</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Storage Device</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Tablet</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">UPS</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Video Encoder</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">WAN Link</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown <?php if ($active == 'data_peminjaman' || $active == 'add_peminjaman') : ?> active <?php endif ?>">
                            <a href="<?= base_url('teknisi/list_assets') ?>" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Non IT Assets</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Project</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">TV</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Video Conference</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown <?php if ($active == 'data_peminjaman' || $active == 'add_peminjaman') : ?> active <?php endif ?>">
                            <a href="<?= base_url('teknisi/list_assets') ?>" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Virtual Hosts/VMs</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Virtual Hosts</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_assets') ?>">Virtual Machines</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">List Solusi</li>
                        <li class="nav-item dropdown <?php if ($active == 'data_pengembalian') : ?> active <?php endif ?>">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>List Solusi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_solusi') ?>">List Solusi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">List Pengumuman</li>
                        <li class="nav-item dropdown <?php if ($active == 'data_pengembalian') : ?> active <?php endif ?>">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>List Pengumuman</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('teknisi/list_pengumuman') ?>">List Pengumuman</a>
                                </li>
                            </ul>
                        </li>
                </aside>
            </div>