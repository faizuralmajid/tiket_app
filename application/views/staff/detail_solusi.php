     <!-- Main Content -->
     <div class="main-content">
         <section class="section">
             <div class="section-header">
                 <h1>Detail Solusi </h1>
             </div>
             <div class="row col-12" style="width: 100%;">
                     <div class="section-header col-12">
                         <table class="">
                             <thead class="">
                                 <?php
                                    $i = 1;
                                    foreach ($detail as $u) {
                                    ?>
                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Judul</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->judul ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Nama Pembuat</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->user ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Created Date</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->created_date ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">End Date</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->end_date ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Tujuan</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->tujuan ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Isi</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td style="padding: 10px;"><?php echo $u->isi ?></td>
                                     </tr>
                                    
                                 <?php
                                    }
                                    ?>
                             </thead>
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

     <style>
         .cke_inner .cke_top {
             display: none;
         }
     </style>
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