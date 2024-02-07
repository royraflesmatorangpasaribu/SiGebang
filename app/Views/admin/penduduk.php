<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                    <a href="/admin/berita/add" class="btn btn-petcare">Tambah Penduduk</a>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-petcare">List Penduduk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. KK</th>
                                            <th>Dusun</th>
                                            <th>RT</th>
                                            <th>NIK Kepala Keluarga</th>
                                            <th>Nama Kepala Keluarga</th>
                                            <th>Jumlah Anggota Keluarga</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($berita as $p) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><img src="<?= $p['foto'] ?? 'https://bootdey.com/img/Content/avatar/avatar7.png' ?>" alt="" height="100px" width="100px"></td>
                                        <td><?= $p['judul']; ?></td>
                                        <td><?= $p['isi']; ?></td>
                                        <td>
                                            <a href="<?= base_url('/admin/berita/'. $p['id'] . '/edit'); ?>" class="btn btn-warning btn-sm mr-2">
                                                <i class="fas fa-pencil"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm mr-2 delete-button" data-url="<?= base_url('/admin/berita/' . $p['id']) ?>"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?= $this->endSection(); ?>