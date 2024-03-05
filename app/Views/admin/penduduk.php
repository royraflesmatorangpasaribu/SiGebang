<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                    <a href="/admin/penduduk/add" class="btn btn-petcare">Tambah Penduduk</a>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($penduduk as $pen) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $pen['no_kk']; ?></td>
                                        <td><?= $pen['dusun']; ?></td>
                                        <td><?= $pen['rt']; ?></td>
                                        <td><?= $pen['nik_kepala_keluarga']; ?></td>
                                        <td><?= $pen['nama_kepala_keluarga']; ?></td>
                                        <td><?= $pen['jumlah_anggota_keluarga']; ?></td>
                                        <td><img src="<?= $pen['foto'] ?? 'https://bootdey.com/img/Content/avatar/avatar7.png' ?>" alt="" height="100px" width="100px"></td>
    
                                        <td>
                                            <a href="<?= base_url('/admin/penduduk/'. $pen['no_kk'] . '/edit'); ?>" class="btn btn-warning btn-sm mr-2">
                                                <i class="fas fa-pencil"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm mr-2 delete-button" data-url="<?= base_url('/admin/penduduk/' . $pen['no_kk']) ?>"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?= $this->endSection(); ?>