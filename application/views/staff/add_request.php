<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $_GET['menu'] ;?> </h1>
        </div>
        <div class="row container">
            <div class="col-md-12 bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                <h3 class="font-weight-bold" style="color: #34395e!important;"><?php echo $_GET['submenu'];?> </h3>
                <hr>
                <form method="POST" action="<?= base_url('admin/add_pegawai') ?>">
                    <div class="form-group ">
                        <label>Nama</label>
                        <input type="text" readonly="readonly" value="<?php echo $nama ?>" class="form-control" name="user" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select style=" height:50px;" id="sub_category" class="form-control selectpicker" name="sub_kategori">
                            <option>---- Pilih Status ---- </option>
                            <option value="Open">Open</option>
                            <option value="Open">Close</option>
                            <option value="Open">Tindak Lanjut</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori:</label>
                        <select style=" height:50px;" class="form-control selectpicker" id="category" name="kategori">
                            <option>---- Pilih Kategori ---- </option>
                            <?php
                            foreach ($kategori as $u) {
                            ?>
                                <option <?php if ($_GET['menu'] == $u->kategori) : ?> selected <?php endif ?> value="<?php echo $u->kategori ?>" ><?php echo $u->kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub Kategori:</label>
                        <select style=" height:50px;" id="sub_category" class="form-control selectpicker" name="sub_kategori">
                            <option>---- Pilih Sub Kategori ---- </option>
                            <?php
                            foreach ($m_subkategori as $u) {
                            ?>
                                <option <?php if ($_GET['submenu'] == $u->subkategori) : ?> selected <?php endif ?>  value="<?php echo $u->id ?>"><?php echo $u->subkategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Penanggung Jawab:</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="staff_nama">
                            <option>---- Pilih PJ ---- </option>
                            <?php
                            foreach ($m_pj as $u) {
                            ?>
                                <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Group:</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="type">
                            <option value="PM">PM</option>
                            <option value="Operasional Task">Operasional Task</option>
                            <option value="Problem">Problem</option>
                            <option value="Change">Change</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Asset:</label>
                        <select onchange="count_aset()" id="assetss" title="---- Pilih Asset ---- " class="form-control selectpicker" multiple data-live-search="true">
                            <option>---- Pilih Asset ---- </option>
                            <?php
                            foreach ($m_asset as $u) {
                            ?>
                                <option value="<?php echo $u->nama_asset ?>"><?php echo $u->nama_asset ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Count Asset:</label>
                        <p class="form-control" id="count_data" type="text" readonly></p>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Masukan Subject">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="ckeditor" id="ckedtor"></textarea>
                    </div>

                    <input type="submit" value="Tambah Pegawai" class="btn btn-success btn-block">
            </div>
            </form>

        </div>
</div>
</div>
</div>
<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2020 <div class="bullet"></div> Program & Design by <a href="faizurrahmanallammajid.github.io">Faizurrahman
    </div>
    <div class="footer-right">
        Made with <span class="text-danger"> &#10084;</span> by Faizurrahman
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script>
    function count_aset() {
        var options = document.getElementById("assetss").options,
            count = 0;
        for (var i = 0; i < options.length; i++) {
            if (options[i].selected) count++;
        } // end of for loop
        document.getElementById("count_data").innerHTML = count;
    } // end of function
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<!-- JS Libraies -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>

<!-- Page Specific JS File -->
</body>

</html>