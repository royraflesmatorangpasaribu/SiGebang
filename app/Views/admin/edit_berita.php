<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Edit Berita</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/berita/'.$p['id'])?>" method="POST"  enctype="multipart/form-data">
    <?= csrf_field() ?>
   <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <br>
    <label for="judul">Judul</label>
    <input type="text" name="judul" value="<?= $p['judul'] ?>" class="form-control <?php if (session()->getFlashdata('error_judul')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_judul')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_judul') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
    <label for="isi">Isi</label>
    <input type="text" name="isi" value="<?= $p['isi'] ?>" class="form-control <?php if (session()->getFlashdata('error_isi')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_isi')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_isi') ?>
              </div>
            <?php endif; ?>
  </div>
  
  <div class="form-group">
    <div class="row">
  <div class="col">
                <img src="<?= $p['foto'] ?>" class="img-thumbnail" width="300px">
    </div>
    <div class="col">
    <label for="foto">Foto</label>
    <input type="file" class="form-control <?php if (session()->getFlashdata('error_foto')) echo 'is-invalid'; ?>"  name="foto" aria-label="Default select example">
    <?php if (session()->getFlashdata('error_foto')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_foto') ?>
              </div>
            <?php endif; ?>
  </input>
    </div>
    </div>
    
  </div>

  <br>
  <a href="/admin/berita/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>

<?= $this->endSection(); ?> 