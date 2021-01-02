<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Request</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $this->db->count_all('tbl_request'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Status Open</h4>
                        </div>
                        <div class="card-body">
                            <?php $this->db->from('tbl_request');
                            $this->db->where('status', 'open');
                            echo $this->db->count_all_results();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Status Close</h4>
                        </div>
                        <div class="card-body">
                            <?php $this->db->from('tbl_request');
                            $this->db->where('status', 'close');
                            echo $this->db->count_all_results();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Status Tindak Lanjut</h4>
                        </div>
                        <div class="card-body">
                            <?php $this->db->from('tbl_request');
                            $this->db->where('status', 'tindak lanjut');
                            echo $this->db->count_all_results();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-header">
            <h1>Tiket Belum Selesai</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="example" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Request</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($request as $u) {
                        ?>
                            <tr class="text-center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $u->user ?></td>
                                <td><?php echo $u->subject ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php
                        $i++;}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr width="80%" color="green">
        <div class="section-header">
            <h1>Tiket Terbaru</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="example" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Request</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($request as $u) {
                        ?>
                            <tr class="text-center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $u->user ?></td>
                                <td><?php echo $u->subject ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php
                        $i++;}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr width="80%" color="green">
        <div class="section-header">
            <h1>Pengumuman</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="example" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($request as $u) {
                        ?>
                            <tr class="text-center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $u->subject ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php
                        $i++;}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr width="80%" color="green">
        <div class="section-header">
            <h1>Solusi</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="example" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pembuat Solusi</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($request as $u) {
                        ?>
                            <tr class="text-center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $u->subject ?></td>
                                <td><?php echo $u->user ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td><?php echo $u->created_date ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php
                        $i++;}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
<?php include("footer.php")?>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>

<!-- Page Specific JS File -->
</body>

</html>