<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Tambah Perangkat Desa</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/perangkat-desa/store')?>" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <br>
    <label for="nik">NIK</label>
    <input type="text" name="nik" class="form-control <?php if (session()->getFlashdata('error_nik')) echo 'is-invalid'; ?>" value="<?= old('nik'); ?>">
            <?php if (session()->getFlashdata('error_nik')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nik') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control <?php if (session()->getFlashdata('error_nama')) echo 'is-invalid'; ?>" value="<?= old('nama'); ?>">
            <?php if (session()->getFlashdata('error_nama')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
    <label for="periode">Periode</label>
    <textarea type="text" name="periode" class="form-control <?php if (session()->getFlashdata('error_periode')) echo 'is-invalid'; ?>" value="<?= old('periode'); ?>"></textarea>
            <?php if (session()->getFlashdata('error_periode')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_periode') ?>
              </div>
            <?php endif; ?>
  </div>
  
  
  <div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" class="form-control <?php if (session()->getFlashdata('error_foto')) echo 'is-invalid'; ?>"  name="foto" aria-label="Default select example">
    <?php if (session()->getFlashdata('error_foto')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_foto') ?>
              </div>
            <?php endif; ?>
  </input>
  </div>

  <br>
  <a href="/admin/perangkat-desa/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>

<?= $this->endSection(); ?> 