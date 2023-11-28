  <main id="main" class="main">

      </main><!-- End #main -->
  <div class="container-fluid">
<section class="page-section" id="mahasiswa">
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-info mb-2">Tambah Mahasiswa</a>
        </div>
        <div class="col-md-12">
        <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Nim</td>
                        <td>Jenis Kelamin</td>
                        <td>Email</td>
                        <td>Prodi</td>
                        <td>Asal Sekolah</td>
                        <td>No Hp</td>
                        <td>Alamat</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>
                            </td>
                            <td>
                                <?= $us['nama']; ?>
                            </td>
                            <td>
                                <?= $us['nim']; ?>
                            </td>
                            <td>
                                <?= $us['jenis_kelamin']; ?>
                            </td>
                            <td>
                                <?= $us['email']; ?>
                            </td>
                            <td>
                                <?= $us['prodi']; ?>
                            </td>
                            <td>
                                <?= $us['asal_sekolah']; ?>
                            </td>
                            <td>
                                <?= $us['no_hp']; ?>
                            </td>
                            <td>
                                <?= $us['alamat']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/')?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/chart.js/chart.umd.js"></script>
  <script src="<?=base_url('assets/')?>vendor/echarts/echarts.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/quill/quill.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url('assets/')?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/')?>js/main.js"></script>

</body>

</html>