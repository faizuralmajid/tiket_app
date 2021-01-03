<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Request </h1>
        </div>
        <div class="row container">
            <div class="col-md-12 bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                <hr>
                <form method="POST" action="<?= base_url('staff/update_datarequest') ?>">
                    <?php
                    foreach ($detail as $u) { ?>
                        <div style="display: none;" class="row" style="width: 100%;">
                            <input type="text" readonly="readonly" value="<?php echo $u->id?>" class="form-control" name="id_data" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->user ?>" class="form-control" name="log_user" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->status ?>" class="form-control" name="log_status" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->kategori ?>" class="form-control" name="log_kategori" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->sub_kategori ?>" class="form-control" name="log_subkategori" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->pj ?>" class="form-control" name="log_pj" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->grup ?>" class="form-control" name="log_grup" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->asset ?>" class="form-control" name="log_asset" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->count_asset ?>" class="form-control" name="log_count" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->start_date ?>" class="form-control" name="log_startdate" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->end_date ?>" class="form-control" name="log_enddate" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->subject ?>" class="form-control" name="log_subject" placeholder="Masukan Nama">
                            <input type="text" readonly="readonly" value="<?php echo $u->body ?>" class="form-control" name="log_body" placeholder="Masukan Nama">
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>Nama</label>
                                    <input type="text" readonly="readonly" value="<?php echo $u->user ?>" class="form-control" name="user" placeholder="Masukan Nama">
                                </div>
                                <?php
                                if (isset($_GET['id_menu'])) {
                                    if ($_GET['id_menu'] != NULL) { ?>
                                        <div class="form-group">
                                            <label>Kategori:</label>
                                            <select style=" height:50px;" class="form-control selectpicker" id="category" name="kategori">
                                                <option>---- Pilih Kategori ---- </option>
                                                <?php
                                                foreach ($kategori as $a) {
                                                ?>
                                                    <option <?php if ($_GET['id_menu'] == $a->kategori) : ?> selected <?php endif ?> value="<?php echo $a->kategori ?>"><?php echo $a->kategori ?></option>
                                                <?php } ?>
                                            </select>
                                        </div><?php
                                            }
                                        } else { ?>
                                    <div class="form-group">
                                        <label>Kategori:</label>
                                        <select style=" height:50px;" class="form-control selectpicker" id="category" name="kategori">
                                            <option>---- Pilih Kategori ---- </option>
                                            <?php
                                            foreach ($kategori as $a) {
                                            ?>
                                                <option <?php if ($u->kategori == $a->kategori) : ?> selected <?php endif ?> value="<?php echo $a->kategori ?>"><?php echo $a->kategori ?></option>
                                            <?php } ?>
                                        </select>
                                    </div><?php
                                        }
                                            ?>
                                <div class="form-group">
                                    <label>Sub Kategori:</label>
                                    <select style=" height:50px;" class="form-control selectpicker" id="sub_category" name="sub_kategori">
                                        <option>---- Pilih Sub Kategori ---- </option>
                                        <?php
                                        foreach ($m_subkategori as $a) {
                                        ?>
                                            <option <?php if ($u->sub_kategori == $a->subkategori) : ?> selected <?php endif ?> value="<?php echo $a->subkategori ?>"><?php echo $a->subkategori ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                                        <option>---- Pilih Status ---- </option>
                                        <option <?php if ($u->status == 'Open') : ?> selected <?php endif ?> value="Open">Open</option>
                                        <option <?php if ($u->status == 'Close') : ?> selected <?php endif ?> value="Close">Close</option>
                                        <option <?php if ($u->status == 'Tindak Lanjut') : ?> selected <?php endif ?> value="Tindak Lanjut">Tindak Lanjut</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Penanggung Jawab:</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                                        <option>---- Pilih PJ ---- </option>
                                        <?php
                                        foreach ($m_pj as $a) {
                                        ?>
                                            <option <?php if ($u->pj == $a->nama) : ?> selected <?php endif ?> value="<?php echo $a->nama ?>"><?php echo $a->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Group:</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="grup">
                                        <option>---- Pilih Group ---- </option>
                                        <?php
                                        foreach ($group as $a) {
                                        ?>
                                            <option <?php if ($u->grup == $a->nama_group) : ?> selected <?php endif ?> value="<?php echo $a->nama_group ?>"><?php echo $a->nama_group  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Asset:</label>
                                    <select onchange="count_aset()" id="assetss" title="---- Pilih Asset ---- " class="form-control selectpicker" multiple data-live-search="true">
                                        <option>---- Pilih Asset ---- </option>
                                        <?php
                                        foreach ($m_asset as $a) {
                                        ?>
                                            <option <?php if ($u->asset == $a->nama_asset) : ?> selected <?php endif ?> value="<?php echo $a->nama_asset ?>"><?php echo $a->nama_asset ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Count Asset:</label>
                                    <input value="<?= $u->count_asset ?>" class="form-control" id="count_data" name="count_a" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Start Date : </label>
                                    <input class="form-control" value="<?= $u->start_date ?>" type="date" name="start_date">
                                </div>
                                <div class="form-group">
                                    <label>End Date :</label>
                                    <input class="form-control" value="<?= $u->end_date ?>" type="date" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" value="<?= $u->subject ?>" class="form-control" name="subject" placeholder="Masukan Subject">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="ckeditor" id="ckedtor" name="body"><?= $u->body ?></textarea>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <input name="id_menu" value="<?php echo $_GET['id_menu'] ?>" id="menu_id">
                                </div>

                                <div class="form-group" style="display: none;">
                                    <label>Start Date : </label>
                                    <input class="form-control" id="ass" type="text" name="assets">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Update Request Catalog" class="btn btn-warning btn-block">
                    <?php } ?>
            </div>
            </form>

        </div>
</div>
</div>
</div>

<?php include("footer.php") ?>

<script>
    $(function() {
        $('#category').on('change', function() {
            var kategori = $(this).val();
            var id_menu = $('#menu_id').val();
            var sub_kategori = $('#sub_category').val();
            var base_url = window.location.origin + window.location.pathname;
            var url = base_url + "?id_menu=" + kategori
            if (url) {
                window.location = url;
            }
            return false;
        });
    });
</script>

<!-- General JS Scripts -->
<script>
    function count_aset() {
        var selectedItem = $('#assetss').val();
        var options = document.getElementById("assetss").options,
            count = 0;
        for (var i = 0; i < options.length; i++) {
            if (options[i].selected) count++;
        } // end of for loop
        document.getElementById("count_data").value = count;
        document.getElementById("ass").value = selectedItem;
        console.log(count);
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