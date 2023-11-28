<main id="main" class="main">

</main><!-- End #main -->
<div class="container-fluid">
<section class="page-section" id="prodi">
<div class="text-center">
  <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
</div>
<div class="row">
  <div class="col-md-6">
      <a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a>
  </div>
  <div class="col-md-12">
  <table class="table">
          <thead>
              <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Ruangan</td>
                  <td>Jurusan</td>
                  <td>Akreditasi</td>
                  <td>Nama Kaprodi</td>
                  <td>Tahun Berdiri</td>
                  <td>Output Lulusan</td>
                  
              </tr>
          </thead>
          <tbody>
              <?php $i = 1; ?>
              <?php foreach ($prodi as $us): ?>
                  <tr>
                      <td>
                          <?= $i; ?>
                      </td>
                      <td>
                          <?= $us['nama']; ?>
                      </td>
                      <td>
                          <?= $us['ruangan']; ?>
                      </td>
                      <td>
                          <?= $us['jurusan']; ?>
                      </td>
                      <td>
                          <?= $us['akreditasi']; ?>
                      </td>
                      <td>
                          <?= $us['nama_kaprodi']; ?>
                      </td>
                      <td>
                          <?= $us['tahun_berdiri']; ?>
                      </td>
                      <td>
                          <?= $us['output_lulusan']; ?>
                      </td>
                      <td>
                          <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                          <a href="<?= base_url('Prodi/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
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