<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Pengguna </h1>
        </div>
        <div class="row" syu>
            <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                <hr>
                <form method="POST" action="<?= base_url('admin/create_pengguna') ?>">
                    <div class="form-group ">
                        <label>Nama</label>
                        <input type="text" required class="form-control" name="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" required class="form-control" name="email" placeholder="Masukan Email">
                    </div>
                    <div class="form-group ">
                        <label>Username</label>
                        <input type="text" required class="form-control" name="username" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="status">
                            <option value="">---- Pilih Hak Akses ---- </option>
                            <option value="0">Admin</option>
                            <option value="1">Teknisi</option>
                            <option value="2">Staff</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label>Password</label>
                        <input pattern=".{8,}" required  title="8 characters minimum" type="password" id="password" class="form-control" name="pass" placeholder="Masukan Password">
                        <div class="invalid-feedback">
                            Minimum Password 8 Karakter
                        </div>
                    </div>
                    <div class="form-group ">
                        <label>Re-Type Password</label>
                        <input type="password" id="confirm_password" class="form-control" name="repass" placeholder="Masukan Re Password">
                        <span id='message'></span>
                    </div>
                    <p style="padding-bottom: 20px;">
                        <input id="btn_cr_pengguna" disabled type="submit" value="Created Request Catalog" class="btn btn-success btn-block">
                    <p style="padding-bottom: 20px;">
            </div>
            </form>

        </div>
</div>
</div>
</div>

<script>
    $('#password, #confirm_password').on('keyup', function() {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Matching').css('color', 'green');
            $("#btn_cr_pengguna").attr("disabled", false);
        } else{
            $('#message').html('Not Matching').css('color', 'red');
            $("#btn_cr_pengguna").attr("disabled", true);
        }
    });
</script>
<?php include("footer.php") ?>

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