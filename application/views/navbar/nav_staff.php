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
    <script type="text/javascript" src=<?=base_url('assets/ckeditor/ckeditor.js')?>></script>
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
                        <a href="<?= base_url('staff') ?>" style="font-size: 35px; font-weight:900;font-family: 'Roboto', sans-serif;" class="text-success">&#9795;Tiket.&not;</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('staff') ?>">TKT</a>
                    </div>

                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown <?php if ($active === 'index') : ?> active <?php endif ?>">
                            <a href="<?= base_url('staff') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Request Catalog</li>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "db_tiket");
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            exit();
                        }   
                        $sql = "SELECT * FROM master_kategori";
                        $result = mysqli_query($con, $sql);
                        while ($dataMenu = mysqli_fetch_assoc($result)) {
                            $menu_id = $dataMenu['id'];
                            $submenu = mysqli_query($con, "SELECT * FROM `master_subkategori` WHERE id_kategori = '$menu_id'");
                            if (mysqli_num_rows($submenu) == 0) {
                                echo '<li><a href="' . $dataMenu['kategori'] . '">' . $dataMenu['kategori'] . '</a></li>';
                            } else {
                                echo '
							<li class="nav-item dropdown">
								<a href="' . $dataMenu['kategori'] . '" class="nav-link has-dropdown"> <i class="fas fa-list-alt "></i><span>' . $dataMenu['kategori'] . '</span></a>
								<ul class="dropdown-menu">';
                                while ($dataSubmenu = mysqli_fetch_assoc($submenu)) {
                                    $pesan = "Selamat datang {$nama}"; # tanda petik dua
                                    $url_data = "staff/add_request?id_menu={$dataMenu['id']}&menu={$dataMenu['kategori']}&submenu={$dataSubmenu['subkategori']}";
                                    echo '<li><a href="'.base_url($url_data).'">' . $dataSubmenu['subkategori'] . '</a></li>';
                                }
                                echo '
								</ul>
							</li>
							';
                            }
                        }
                        ?>
                        <li class="menu-header">List All Request</li>
                        <li class="nav-item dropdown <?php if ($active == 'data_peminjaman' || $active == 'add_peminjaman') : ?> active <?php endif ?>">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>List Request</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('staff/list_request') ?>">List Request</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-header">List All Pengumuman</li>
                        <li class="nav-item dropdown <?php if ($active == 'data_pengembalian') : ?> active <?php endif ?>">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>List Pengumuman</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('staff/list_pengumuman') ?>">List Pengumuman</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-header">List All Solusi</li>
                        <li class="nav-item dropdown <?php if ($active == 'data_pegawai') : ?> active <?php endif ?>">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>List Solusi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('staff/list_solusi') ?>">List Solusi</a>
                                </li>
                            </ul>
                        </li>
                </aside>
            </div>