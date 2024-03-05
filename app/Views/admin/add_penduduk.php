<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Tambah Penduduk</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/penduduk/store')?>" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <br>
    <label for="no_kk">No Kartu Keluarga</label>
    <input type="text" name="no_kk" class="form-control <?php if (session()->getFlashdata('error_no_kk')) echo 'is-invalid'; ?>" value="<?= old('no_kk'); ?>">
            <?php if (session()->getFlashdata('error_no_kk')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_no_kk') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
  <label for="dusun">Dusun</label>
    <input type="text" name="dusun" class="form-control <?php if (session()->getFlashdata('error_dusun')) echo 'is-invalid'; ?>" value="<?= old('dusun'); ?>">
            <?php if (session()->getFlashdata('error_dusun')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_dusun') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
  <label for="rt">RT</label>
    <input type="text" name="rt" class="form-control <?php if (session()->getFlashdata('error_rt')) echo 'is-invalid'; ?>" value="<?= old('rt'); ?>">
            <?php if (session()->getFlashdata('error_rt')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_rt') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
  <label for="nik_kepala_keluarga">NIK Kepala Keluarga</label>
    <input type="text" name="nik_kepala_keluarga" class="form-control <?php if (session()->getFlashdata('error_nik_kepala_keluarga')) echo 'is-invalid'; ?>" value="<?= old('nik_kepala_keluarga'); ?>">
            <?php if (session()->getFlashdata('error_nik_kepala_keluarga')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nik_kepala_keluarga') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
  <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
    <input type="text" name="nama_kepala_keluarga" class="form-control <?php if (session()->getFlashdata('error_nama_kepala_keluarga')) echo 'is-invalid'; ?>" value="<?= old('nama_kepala_keluarga'); ?>">
            <?php if (session()->getFlashdata('error_nama_kepala_keluarga')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama_kepala_keluarga') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
  <label for="jumlah_anggota_keluarga">Jumlah Anggota Keluargaa</label>
    <input type="text" name="jumlah_anggota_keluarga" class="form-control <?php if (session()->getFlashdata('error_jumlah_anggota_keluarga')) echo 'is-invalid'; ?>" value="<?= old('jumlah_anggota_keluarga'); ?>">
            <?php if (session()->getFlashdata('error_jumlah_anggota_keluarga')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_jumlah_anggota_keluarga') ?>
              </div>
            <?php endif; ?>
  </div>

  
  <div class="form-group">

    <br>
    <label for="foto">Kartu Keluarga</label>
    <input type="file" class="form-control <?php if (session()->getFlashdata('error_foto')) echo 'is-invalid'; ?>"  name="foto" aria-label="Default select example">
    <?php if (session()->getFlashdata('error_foto')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_foto') ?>
              </div>
            <?php endif; ?>
  </input>
  </div>

  <br>
  <a href="/admin/berita/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>

<?= $this->endSection(); ?> 