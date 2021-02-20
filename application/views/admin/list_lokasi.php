      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>List Lokasi - Kota </h1>
              </div>
              <div class="section-header">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#parentmenu" style="margin-right: 10px;">
                      Tambah Lokasi
                  </button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submenu">
                      Tambah Kota
                  </button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submenu">
                      Tambah Kawasan
                  </button>
              </div>
              <div class="row" style="overflow: scroll">
                  <div class="col-md-12">
                      <div class="section-header">
                          <h1>Lokasi </h1>
                      </div>
                      <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                          <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                                  <tr class="text-center">
                                      <th style="width: 60px;">No</th>
                                      <th scope="col" style="text-align: left;">Menu Parent</th>
                                      <th scope="col">Option</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;
                                    foreach ($kategori as $u) {
                                    ?>
                                      <tr class="text-center">
                                          <td style="width: 60px;"><?php echo $i ?></td>
                                          <td style="text-align: left;"><?php echo $u->lokasi ?></td>
                                          <td class="text-center">
                                              <button class="btn btn-sm btn-warning btn-edit" data-id='<?php echo $u->id; ?>' data-nama='<?php echo $u->lokasi; ?>'>Update</button>
                                              <a href=<?= base_url("admin/delete_lokasi/" . $u->id . "/" . $u->id) ?> class=" btn btn-sm btn-danger">Hapus</a>
                                          </td>
                                      </tr>
                                  <?php
                                        $i++;
                                    }
                                    ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              </br></br>
              <div class="row" style="overflow: scroll">
                  <div class="col-md-12">
                      <div class="section-header">
                          <h1>Kota </h1>
                      </div>
                      <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                          <table id="tble" class="table align-items-center table-flush">
                              <thead class="thead-light">
                                  <tr class="text-center">
                                      <th style="width: 60px;">No</th>
                                      <th scope="col" style="text-align: left;">Lokasi</th>
                                      <th scope="col" style="text-align: left;">Kota</th>
                                      <th scope="col">Option</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;
                                    foreach ($subkategori as $u) {
                                    ?>
                                      <tr class="text-center">
                                          <td style="width: 60px;"><?php echo $i ?></td>
                                          <td style="text-align: left;"><?php echo $u->lokasi ?></td>
                                          <td style="text-align: left;"><?php echo $u->kota ?></td>
                                          <td class="text-center">
                                              <button class="btn btn-sm btn-warning btn-edit-sub" data-id='<?php echo $u->id; ?>' data-idsub='<?php echo $u->id_id; ?>' data-namakat='<?php echo $u->lokasi; ?>' data-nama='<?php echo $u->kota; ?>'>Update</button>
                                              <a href=<?= base_url("admin/delete_kota/" . $u->id_id) ?> class=" btn btn-sm btn-danger">Hapus</a>
                                          </td>
                                      </tr>
                                  <?php
                                        $i++;
                                    }
                                    ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>

              </br></br>
              <div class="row" style="overflow: scroll">
                  <div class="col-md-12">
                      <div class="section-header">
                          <h1>Kawasan </h1>
                      </div>
                      <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                          <table id="tble" class="table align-items-center table-flush">
                              <thead class="thead-light">
                                  <tr class="text-center">
                                      <th style="width: 60px;">No</th>
                                      <th scope="col" style="text-align: left;">Lokasi</th>
                                      <th scope="col" style="text-align: left;">Kota</th>
                                      <th scope="col">Option</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;
                                    foreach ($kawasan as $u) {
                                    ?>
                                      <tr class="text-center">
                                          <td style="width: 60px;"><?php echo $i ?></td>
                                          <td style="text-align: left;"><?php echo $u->lokasi ?></td>
                                          <td style="text-align: left;"><?php echo $u->kota ?></td>
                                          <td class="text-center">
                                              <button class="btn btn-sm btn-warning btn-edit-sub" data-id='<?php echo $u->id; ?>' data-idsub='<?php echo $u->id_id; ?>' data-namakat='<?php echo $u->lokasi; ?>' data-nama='<?php echo $u->kota; ?>'>Update</button>
                                              <a href=<?= base_url("admin/delete_kota/" . $u->id_id) ?> class=" btn btn-sm btn-danger">Hapus</a>
                                          </td>
                                      </tr>
                                  <?php
                                        $i++;
                                    }
                                    ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>


      </div>
      </div>
      <!-- The Modal -->
      <div class="modal" id="parentmenu">
          <div class="modal-dialog">
              <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">Form Tambah Lokasi</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                      <form method="post" action="<?= base_url('admin/create_lokasi') ?>">
                          <div class="form-group ">
                              <label>Nama Lokasi</label>
                              <input type="text" class="form-control" name="kategori" placeholder="Masukan Menu Baru">
                          </div>

                          <input type="submit" class="btn btn-success" value="Tambah Lokasi">
                      </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                  </div>

              </div>
          </div>
      </div>

      <!-- The Modal -->
      <div class="modal" id="update_parentmenu">
          <div class="modal-dialog">
              <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">Form Update Lokasi</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                      <form method="post" action="<?= base_url('admin/update_lokasi') ?>">
                          <div class="form-group ">
                              <label>Nama Lokasi</label>
                              <input type="text" class="form-control" id="mod_kategori" name="kategori" placeholder="Masukan Menu Update">
                          </div>

                          <div class="form-group " style="display: none;">
                              <label>Nama Menu</label>
                              <input type="text" class="form-control" id="mod_id" name="id_kat" placeholder="Masukan Menu Update">
                          </div>

                          <input type="submit" class="btn btn-success" value="Update Lokasi">
                      </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                  </div>

              </div>
          </div>
      </div>

      <div class="modal" id="submenu">
          <div class="modal-dialog">
              <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">Form Tambah Kota</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                      <form method="post" action="<?= base_url('admin/create_kota') ?>">

                          <div class="form-group">
                              <label class="col-form-label">Pilih Menu:</label>
                              <select class="form-control" name="kategori">
                                  <option>--Pilih Menu</option>
                                  <?php
                                    foreach ($kategori as $u) {
                                    ?>
                                      <option value="<?php echo $u->id ?>"><?php echo $u->lokasi ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                          <div class="form-group ">
                              <label>Nama Kota</label>
                              <input type="text" name="subkategori" required class="form-control" placeholder="Masukan Kota Baru">
                          </div>
                          <input type="submit" class="btn btn-success" value="Tambah Kota">
                      </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">

                  </div>

              </div>
          </div>
      </div>

      <div class="modal" id="update_submenu">
          <div class="modal-dialog">
              <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">Form Update Kota</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                      <form method="post" action="<?= base_url('admin/update_kota') ?>">
                          <input style="display: none;" type="text" class="form-control" id="mod_id_sub" name="id_sub" placeholder="Masukan Menu Update">
                          <div class="form-group ">
                              <label>Nama Parent Lokasi</label>
                              <input type="text" id="mod_kategori_sub" required class="form-control" disabled>
                          </div>
                          <div class="form-group ">
                              <label>Nama kota</label>
                              <input type="text" name="subkategori" id="mod_subkategori" required class="form-control" placeholder="Masukan Menu Baru">
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Ganti Lokasi:</label>
                              <select class="form-control" name="kategori">
                                  <option>--Pilih Menu</option>
                                  <?php
                                    foreach ($kategori as $u) {
                                    ?>
                                      <option value="<?php echo $u->id ?>"><?php echo $u->lokasi ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                         
                          <input type="submit" class="btn btn-success" value="Update Kota">
                      </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">

                  </div>

              </div>
          </div>
      </div>

      <script>
          $(document).ready(function() {
              // Setup - add a text input to each footer cell
              $('#tble thead tr').clone(true).appendTo('#tble thead').attr('id', 'search_make');
              $('#tble thead tr:eq(1) th').each(function(i) {
                  var title = $(this).text();
                  $(this).html('<input type="text" placeholder="' + title + '" id="' + title + '"/>');

                  $('input', this).on('keyup change', function() {
                      if (table.column(i).search() !== this.value) {
                          table
                              .column(i)
                              .search(this.value)
                              .draw();
                      }
                  });
              });
              var table = $('#tble').DataTable({
                  orderCellsTop: true,
                  fixedHeader: true,
                  "lengthChange": false,
                  "pagingType": "full_numbers",
                  "lengthMenu": [
                      [10, 25, 50, -1],
                      [10, 25, 50, "All"]
                  ]
              });
          });
      </script>
      <script>
          $('.btn-edit').click(function(e) {
              e.preventDefault();
              $('#update_parentmenu').modal({
                  backdrop: 'static',
                  show: true
              });
              id = $(this).data('id');
              nama = $(this).data('nama');
              $('#mod_kategori').val(nama);
              $('#mod_id').val(id);
          });
      </script>

      <script>
          $('.btn-edit-sub').click(function(e) {
              e.preventDefault();
              $('#update_submenu').modal({
                  backdrop: 'static',
                  show: true
              });
              id = $(this).data('id');
              nama = $(this).data('nama');
              idsub = $(this).data('idsub');
              namakat = $(this).data('namakat');
              $('#mod_subkategori').val(nama);
              $('#mod_kategori_sub').val(namakat);
              $('#mod_id_sub').val(idsub);
          });
      </script>

      <?php if ($this->session->flashdata('success-edit')) : ?>
          <script>
              Swal.fire({
                  icon: 'success',
                  title: 'Data Barang Telah Dirubah!',
                  text: 'Selamat data berubah!',
                  showConfirmButton: false,
                  timer: 2500
              })
          </script>
      <?php endif; ?>
      <?php if ($this->session->flashdata('user-delete')) : ?>
          <script>
              Swal.fire({
                  icon: 'success',
                  title: 'Data Barang Telah Dihapus!',
                  text: 'Selamat data telah Dihapus!',
                  showConfirmButton: false,
                  timer: 2500
              })
          </script>
      <?php endif; ?>
      <?php if ($this->session->flashdata('success-reg')) : ?>
          <script>
              Swal.fire({
                  icon: 'success',
                  title: 'Barang Berhasil di Masukkan',
                  text: 'Selamat data telah di Simpan!',
                  showConfirmButton: false,
                  timer: 2500
              })
          </script>
      <?php endif; ?>

      <?php include("footer.php") ?>


      <!-- General JS Scripts -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>



      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>

      <!-- JS Libraies -->
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

      <!-- Template JS File -->
      <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
      <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
      <!-- Page Specific JS File -->
      </body>

      </html>