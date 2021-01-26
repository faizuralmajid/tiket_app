      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>List <?= $menu ?></h1>
              </div>
              <div class="section-header">
                  <a id="filtering" class="btn btn-primary" href="<?= base_url('teknisi/add_assets/' . $menu) ?>">Tambah Assets</a>
              </div>
              <div class="row" style="overflow: scroll">
                  <div class="col-md-12">
                      <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">



                          <?php if ($menu == "Access Point" || $menu == "Firewall" || $menu == "IP Phone" || $menu == "Rack"  || $menu == "TV"  || $menu == "Video Conference"  || $menu == "Projector") { ?>
                              <table id="example" class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr class="text-center">
                                          <th style="width: 60px;">Name</th>
                                          <th scope="col">Ci Type</th>
                                          <th scope="col">Is loaned</th>
                                          <th scope="col">loan expiry</th>
                                          <th scope="col">product</th>
                                          <th scope="col">asset state</th>
                                          <th scope="col">associated to</th>
                                          <th scope="col">user</th>
                                          <th scope="col">department</th>
                                          <th scope="col">org</th>
                                          <th scope="col">serial number</th>
                                          <th scope="col">purchase cost($)</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($asset as $u) {
                                        ?>
                                          <tr class="text-center">
                                              <td style="width: 60px;"><?php echo $u->nama_asset ?></td>
                                              <td><?php echo $u->jenis ?></td>
                                              <td><?php echo $u->date1 ?></td>
                                              <td><?php echo $u->date2 ?></td>
                                              <td><?php echo $u->i ?></td>
                                              <td><?php echo $u->j ?></td>
                                              <td><?php echo $u->k ?></td>
                                              <td><?php echo $u->d ?></td>
                                              <td><?php echo $u->e ?></td>
                                              <td><?php echo $u->f ?></td>
                                              <td><?php echo $u->g ?></td>
                                              <td><?php echo $u->h ?></td>
                                          </tr>
                                      <?php
                                        }
                                        ?>
                                  </tbody>
                              </table>
                          <?php } ?>



                          <?php if ($menu == "IPS" || $menu == "NTP" || $menu == "Router" || $menu == "Switch" ||  $menu == "UPS"  ||  $menu == "Video Encoder"  ||  $menu == "Storage Device" ||  $menu == "Room Sensor") { ?>
                              <table id="example" class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr class="text-center">
                                          <th style="width: 60px;">Name</th>
                                          <th scope="col">Ci Type</th>
                                          <th scope="col">Is loaned</th>
                                          <th scope="col">loan expiry</th>
                                          <th scope="col">product</th>
                                          <th scope="col">asset state</th>
                                          <th scope="col">associated to</th>
                                          <th scope="col">user</th>
                                          <th scope="col">department</th>
                                          <th scope="col">serial number</th>
                                          <th scope="col">purchase cost($)</th>
                                          <th scope="col">manufacturer </th>
                                          <th scope="col">serial number</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($asset as $u) {
                                        ?>
                                          <tr class="text-center">
                                              <td style="width: 60px;"><?php echo $u->nama_asset ?></td>
                                              <td><?php echo $u->jenis ?></td>
                                              <td><?php echo $u->date1 ?></td>
                                              <td><?php echo $u->date2 ?></td>
                                              <td><?php echo $u->i ?></td>
                                              <td><?php echo $u->j ?></td>
                                              <td><?php echo $u->k ?></td>
                                              <td><?php echo $u->d ?></td>
                                              <td><?php echo $u->e ?></td>
                                              <td><?php echo $u->f ?></td>
                                              <td><?php echo $u->g ?></td>
                                              <td><?php echo $u->h ?></td>
                                          </tr>
                                      <?php
                                        }
                                        ?>
                                  </tbody>
                              </table>
                          <?php } ?>


                          <?php if ($menu == "Smart Phone" || $menu == "Tablet") { ?>
                              <table id="example" class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr class="text-center">
                                          <th style="width: 60px;">Name</th>
                                          <th scope="col">Ci Type</th>
                                          <th scope="col">Is loaned</th>
                                          <th scope="col">loan expiry</th>
                                          <th scope="col">product</th>
                                          <th scope="col">asset state</th>
                                          <th scope="col">associated to</th>
                                          <th scope="col">user</th>
                                          <th scope="col">department</th>
                                          <th scope="col">org</th>
                                          <th scope="col">serial number</th>
                                          <th scope="col">purchase cost($)</th>
                                          <th scope="col">is personal</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($asset as $u) {
                                        ?>
                                          <tr class="text-center">
                                              <td style="width: 60px;"><?php echo $u->nama_asset ?></td>
                                              <td><?php echo $u->jenis ?></td>
                                              <td><?php echo $u->date1 ?></td>
                                              <td><?php echo $u->date2 ?></td>
                                              <td><?php echo $u->i ?></td>
                                              <td><?php echo $u->j ?></td>
                                              <td><?php echo $u->k ?></td>
                                              <td><?php echo $u->d ?></td>
                                              <td><?php echo $u->e ?></td>
                                              <td><?php echo $u->f ?></td>
                                              <td><?php echo $u->g ?></td>
                                              <td><?php echo $u->h ?></td>
                                          </tr>
                                      <?php
                                        }
                                        ?>
                                  </tbody>
                              </table>
                          <?php } ?>

                          <?php if ($menu == "Server") { ?>
                              <table id="example" class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr class="text-center">
                                          <th style="width: 60px;">Name</th>
                                          <th scope="col">Ci Type</th>
                                          <th scope="col">Model</th>
                                          <th scope="col">Operating System</th>
                                          <th scope="col">Service Tag</th>
                                          <th scope="col">Asset State</th>
                                          <th scope="col">User</th>
                                          <th scope="col">department</th>
                                          <th scope="col">org</th>
                                          <th scope="col">serial number</th>
                                          <th scope="col">purchase cost($)</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($asset as $u) {
                                        ?>
                                          <tr class="text-center">
                                              <td style="width: 60px;"><?php echo $u->nama_asset ?></td>
                                              <td><?php echo $u->jenis ?></td>
                                              <td><?php echo $u->date1 ?></td>
                                              <td><?php echo $u->date2 ?></td>
                                              <td><?php echo $u->i ?></td>
                                              <td><?php echo $u->j ?></td>
                                              <td><?php echo $u->k ?></td>
                                              <td><?php echo $u->d ?></td>
                                              <td><?php echo $u->e ?></td>
                                              <td><?php echo $u->f ?></td>
                                              <td><?php echo $u->g ?></td>
                                              <td><?php echo $u->h ?></td>
                                          </tr>
                                      <?php
                                        }
                                        ?>
                                  </tbody>
                              </table>
                          <?php } ?>

                          <?php if ($menu == "Virtual Hosts") { ?>
                              <table id="example" class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr class="text-center">
                                          <th style="width: 60px;">Name</th>
                                          <th scope="col">Model</th>
                                          <th scope="col">Operating System</th>
                                          <th scope="col">Installed VMs</th>
                                          <th scope="col">Total Memory (GB)</th>
                                          <th scope="col">Logical Processors</th>
                                          <th scope="col">purchase cost($)</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($asset as $u) {
                                        ?>
                                          <tr class="text-center">
                                              <td style="width: 60px;"><?php echo $u->nama_asset ?></td>
                                              <td><?php echo $u->jenis ?></td>
                                              <td><?php echo $u->date1 ?></td>
                                              <td><?php echo $u->date2 ?></td>
                                              <td><?php echo $u->i ?></td>
                                              <td><?php echo $u->j ?></td>
                                              <td><?php echo $u->k ?></td>
                                              <td><?php echo $u->d ?></td>
                                          </tr>
                                      <?php
                                        }
                                        ?>
                                  </tbody>
                              </table>
                          <?php } ?>

                          <?php if ($menu == "Virtual Machines") { ?>
                              <table id="example" class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr class="text-center">
                                          <th style="width: 60px;">Name</th>
                                          <th scope="col">Host</th>
                                          <th scope="col">CPU Reservation (mhz)</th>
                                          <th scope="col">CPU Limit (mhz)</th>
                                          <th scope="col">CPU Limit(%)</th>
                                          <th scope="col">Memory Reservation (mb)/th>
                                          <th scope="col">purchase cost($)</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i = 1;
                                        foreach ($asset as $u) {
                                        ?>
                                          <tr class="text-center">
                                          <td style="width: 60px;"><?php echo $u->nama_asset ?></td>
                                              <td><?php echo $u->jenis ?></td>
                                              <td><?php echo $u->date1 ?></td>
                                              <td><?php echo $u->date2 ?></td>
                                              <td><?php echo $u->i ?></td>
                                              <td><?php echo $u->j ?></td>\
                                          </tr>
                                      <?php
                                        }
                                        ?>
                                  </tbody>
                              </table>
                          <?php } ?>






                      </div>
                  </div>
              </div>
      </div>
      </div>

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

      <script>
          $(document).ready(function() {
              // Setup - add a text input to each footer cell
              $('#example thead tr').clone(true).appendTo('#example thead').attr('id', 'search_make');
              $('#example thead tr:eq(1) th').each(function(i) {
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
              var table = $('#example').DataTable({
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