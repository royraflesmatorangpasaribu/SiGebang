<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Edit Perangkat Desa</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/perangkat-desa/'.$p['nik'])?>" method="POST"  enctype="multipart/form-data">
    <?= csrf_field() ?>
   <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <br>
    <label for="nik">NIK</label>
    <input type="text" name="nik" value="<?= $p['nik'] ?>" class="form-control <?php if (session()->getFlashdata('error_nik')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_nik')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nik') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?= $p['nama'] ?>" class="form-control <?php if (session()->getFlashdata('error_nama')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_nama')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama') ?>
              </div>
            <?php endif; ?>
  </div>

  <div class="form-group">
    <br>
    <label for="periode">Periode</label>
    <textarea name="periode" class="form-control <?php if (session()->getFlashdata('error_periode')) echo 'is-invalid'; ?>" ><?= $p['periode'] ?></textarea>
            <?php if (session()->getFlashdata('error_periode')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_periode') ?>
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
  <a href="/admin/perangkat-desa/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>

<?= $this->endSection(); ?> 