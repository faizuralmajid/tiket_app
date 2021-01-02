     <!-- Main Content -->
     <div class="main-content">
         <section class="section">
             <div class="section-header">
                 <h1>Detail Request </h1>
             </div>
             <div class="row" style="width: 100%;">
                 <div class="col-lg-6">
                     <div class="section-header">
                         <table class="">
                             <thead class="">
                                 <?php
                                    $i = 1;
                                    foreach ($detail as $u) {
                                    ?>
                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Subject</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->subject ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Nama Request</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->user ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">kategori</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->kategori ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Sub Kategori</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->sub_kategori ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Status</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->status ?></td>
                                     </tr>
                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Assets</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->asset ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Jumlah Asset </th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->count_asset ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Group</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->grup ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Penanggung Jawab</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->pj ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Created Date</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->created_date ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">Start Date</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->start_date ?></td>
                                     </tr>

                                     <tr class="text-left">
                                         <th scope="col" style=" font-weight: bold;">End Date</th>
                                         <th scope="col" style="padding: 10px;">:</th>
                                         <td><?php echo $u->start_date ?></td>
                                     </tr>
                                 <?php
                                    }
                                    ?>
                             </thead>
                         </table>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="section-header">
                         <table class="">
                             <thead class="">
                                 <tr>
                                     <td>
                                         <h4 style="color:black">Deskripsi</h4>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <h5 style="color:black"></br></h5>
                                     </td>
                                 </tr>
                                 <?php
                                    $i = 1;
                                    foreach ($detail as $u) {
                                    ?>
                                     <?php $html = $u->body ?>
                                     <tr class="text-left">
                                         <td width="600px"> <textarea style="width:100%; height:2000px " class="ckeditor" id="isi_artikel" name="isi_artikel" disabled><?php echo $html ?></textarea></td>
                                     </tr>

                                 <?php
                                    }
                                    ?>
                             </thead>
                         </table>
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