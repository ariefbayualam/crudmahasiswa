<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Prodi/upload'); ?>" method="POST">
                        <div action="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi">
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                        </div>
                        <div class="from-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">
                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                        </div>
                        <div class="form-group">
                            <label for="output_jurusan">Output Jurusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output lulusan">
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="Sumbit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>