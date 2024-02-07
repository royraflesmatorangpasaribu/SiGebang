<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Tambah Berita</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/berita/store')?>" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <br>
    <label for="judul">Judul berita</label>
    <input type="text" name="judul" class="form-control <?php if (session()->getFlashdata('error_judul')) echo 'is-invalid'; ?>" value="<?= old('judul'); ?>">
            <?php if (session()->getFlashdata('error_judul')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_judul') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
    <label for="isi">Isi</label>
    <textarea type="text" name="isi" class="form-control <?php if (session()->getFlashdata('error_isi')) echo 'is-invalid'; ?>" value="<?= old('isi'); ?>"><?php if (session()->getFlashdata('error_isi')) : ?><div class="invalid-feedback"><?= session()->getFlashdata('error_isi') ?></div><?php endif; ?></textarea>
  </div>
  
  <div class="form-group">
    <label for="foto">Thumbnail</label>
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