      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>List All Solusi </h1>
              </div>
              <div class="row" style="overflow: scroll">
                  <div class="col-12">
                      <table id="example" class="table align-items-center table-flush">
                          <thead class="thead-light">
                              <tr class="text-center">
                                  <th scope="col">No</th>
                                  <th scope="col">Judul</th>
                                  <th scope="col">Pembuat Solusi</th>
                                  <th scope="col">Created Date</th>
                                  <th scope="col">End Date</th>
                                  <th scope="col">Option</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $i = 1;
                                foreach ($solusi as $u) {
                                ?>
                                  <tr class="text-center">
                                      <td><?php echo $i ?></td>
                                      <td><?php echo $u->judul ?></td>
                                      <td><?php echo $u->user ?></td>
                                      <td><?php echo $u->created_date ?></td>
                                      <td><?php echo $u->end_date ?></td>
                                      <td class="text-center">
                                          <a href="#" class="btn btn-sm btn-success">Detail</a>
                                      </td>
                                  </tr>
                              <?php
                                }
                                ?>
                          </tbody>
                      </table>
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

      <script>
          var element = document.getElementById("id01");

          function myFunction() {
              var element = document.getElementById("filtering");
              var x = document.getElementById("search_make");
              if (x.style.visibility === "") {
                  x.style.visibility = "collapse";
                  element.innerHTML = "Tampilkan Filter";
              } else if (x.style.visibility === "collapse") {
                  x.style.visibility = "visible";
                  element.innerHTML = "Sembunyikan Filter";
              } else {
                  x.style.visibility = "collapse";
                  element.innerHTML = "Tampilkan Filter";
              }
          }
      </script>
      <?php include("footer.php")?>


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
      <script>
          $(document).ready(function() {
              // Setup - add a text input to each footer cell
              $('#example thead tr').clone(true).appendTo('#example thead').attr('id', 'search_make');
              $('#example thead tr:eq(1) th').each(function(i) {
                  var title = $(this).text();
                  $(this).html('<input type="text" placeholder="Search ' + title + '" id="' + title + '"/>');

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

      <!-- Template JS File -->
      <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
      <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>



      <!-- Page Specific JS File -->
      </body>

      </html>