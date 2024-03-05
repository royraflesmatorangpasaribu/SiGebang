<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\PendudukModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{   
    public $adminModel, $beritaModel, $pendudukModel;

    public function __construct(){
        $this->adminModel = new AdminModel();
        $this->beritaModel = new BeritaModel();
        $this->pendudukModel = new PendudukModel();
    }

    public function index()
    {   
        $data = [
            'title' => 'Admin'
        ];
        return view('admin/index', $data);
    }

    public function perangkat()
    {   
        $data = [
            'title' => 'Perangkat Desa',
            'perangkat' => $this->adminModel->getPerangkat()
        ];
        return view('admin/perangkat_desa', $data);
    }

    public function addPerangkat()
    {   
        $data = [
            'title' => 'Tambah Perangkat Desa',
        ];
        return view('admin/add_perangkat_desa', $data);
    }

    public function simpanPerangkat()
    {   
        if (!$this->validate([
            'foto' => [
                'rules'         => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',

                'errors'        => [
                    'uploaded'  => 'Foto harus dipilih.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'   => 'Foto harus berekstensi png,jpg,jpeg,gif.'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
            'periode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
        ])) {
            $validationErrors = $this->validator->getErrors();

            // Simpan pesan kesalahan dalam flashdata berdasarkan nama bidang
            foreach ($validationErrors as $field => $error) {
                session()->setFlashdata('error_' . $field, $error);
            }
            return redirect()->to('/admin/perangkat-desa/add')->withInput();
        }
        $path = 'assets/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if ($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }
        $this->adminModel->savePerangkat([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'periode' => $this->request->getVar('periode'),
            'foto'=>$foto,

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to('/admin/perangkat-desa/');
    }

    public function editPerangkat($nik)
    {

        $data = [
            'title' => 'Form Update product',
            'p' =>  $this->adminModel->getPerangkat($nik)
        ];
        return view('admin/edit_perangkat_desa', $data);
    }
    
    public function updateproduct($nik)
    {

        $path = 'assets/img/';
        $foto = $this->request->getFile('foto');

        // Periksa apakah ada file foto baru yang diunggah
        if ($foto->isValid()) {
            $name = $foto->getRandomName();
            if ($foto->move($path, $name)) {
                $foto = base_url($path . $name);
            }
        } else {
            $existingData = $this->adminModel->getPerangkat($nik);
            $foto = $existingData['foto'];
        }

        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'periode' => $this->request->getVar('periode'),
            'foto'=>$foto,

        ];

        $result = $this->adminModel->updatePerangkat($nik, $data);

        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to('admin/perangkat-desa');
    }
    public function destroyPerangkat($nik)
    {
        $result = $this->adminModel->deletePerangkat($nik);
        if (!$result) {
            return redirect()->back()->with('Error', 'Gagal menghapus Data');
        }
        return redirect()->to(base_url('/admin/perangkat-desa/'))->with('success', 'Berhasil menghapus data');
    }

    public function berita()
    {   
        $data = [
            'title' => 'Berita',
            'berita' => $this->beritaModel->getBerita()
        ];
        return view('admin/berita', $data);
    }

    public function addBerita()
    {   
        $data = [
            'title' => 'Tambah Berita',
        ];
        return view('admin/add_berita', $data);
    }

    public function simpanBerita()
    {   
        if (!$this->validate([
            'foto' => [
                'rules'         => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',

                'errors'        => [
                    'uploaded'  => 'Foto harus dipilih.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'   => 'Foto harus berekstensi png,jpg,jpeg,gif.'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
        ])) {
            $validationErrors = $this->validator->getErrors();

            // Simpan pesan kesalahan dalam flashdata berdasarkan nama bidang
            foreach ($validationErrors as $field => $error) {
                session()->setFlashdata('error_' . $field, $error);
            }
            return redirect()->to('/admin/berita/add')->withInput();
        }
        $path = 'assets/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if ($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }
        $this->beritaModel->saveBerita([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'foto'=>$foto,

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to('/admin/berita/');
    }

    public function editBerita($id)
    {

        $data = [
            'title' => 'Form Update product',
            'p' =>  $this->beritaModel->getBerita($id)
        ];
        return view('admin/edit_berita', $data);
    }

    public function updateBerita($id)
    {

        $path = 'assets/img/';
        $foto = $this->request->getFile('foto');

        // Periksa apakah ada file foto baru yang diunggah
        if ($foto->isValid()) {
            $name = $foto->getRandomName();
            if ($foto->move($path, $name)) {
                $foto = base_url($path . $name);
            }
        } else {
            $existingData = $this->beritaModel->getBerita($id);
            $foto = $existingData['foto'];
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'foto'=>$foto,

        ];

        $result = $this->beritaModel->updateBerita($id, $data);

        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to('admin/berita');
    }
    

    public function destroyBerita($id)
    {
        $result = $this->beritaModel->deleteBerita($id);
        if (!$result) {
            return redirect()->back()->with('Error', 'Gagal menghapus Data');
        }
        return redirect()->to(base_url('/admin/berita/'))->with('success', 'Berhasil menghapus data');
    }

    public function penduduk()
    {   
        $data = [
            'title' => 'Penduduk',
            'penduduk' => $this->pendudukModel->getPenduduk()
        ];
        return view('admin/penduduk', $data);
    }


    public function addPenduduk()
    {   
        $data = [
            'title' => 'Tambah Penduduk',
        ];
        return view('admin/add_penduduk', $data);
    }

    public function simpanPenduduk()
    {   
        if (!$this->validate([
            'foto' => [
                'rules'         => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',

                'errors'        => [
                    'uploaded'  => 'Foto harus dipilih.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'   => 'Foto harus berekstensi png,jpg,jpeg,gif.'
                ]
            ],
            'no_kk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],

                'rt' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                    ]
                    ],

                    'nik_kepala_keluarga' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong.',
                        ]
                        ],
            
                        'nama_kepala_keluarga' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} tidak boleh kosong.',
                            ]
                            ],

                            'jumlah_anggota_keluarga' => [
                                'rules' => 'required',
                                'errors' => [
                                    'required' => '{field} tidak boleh kosong.',
                                ]
                                ],
        ])) {
            $validationErrors = $this->validator->getErrors();

            // Simpan pesan kesalahan dalam flashdata berdasarkan nama bidang
            foreach ($validationErrors as $field => $error) {
                session()->setFlashdata('error_' . $field, $error);
            }
            return redirect()->to('/admin/penduduk/add')->withInput();
        }
        $path = 'assets/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if ($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }
        // dd(['no_kk' => $this->request->getVar('no_kk'),
        // 'dusun' => $this->request->getVar('dusun'),
        // 'rt' => $this->request->getVar('rt'),
        // 'nik_kepala_keluarga' => $this->request->getVar('nik_kepala_keluarga'),
        // 'nama_kepala_keluarga' => $this->request->getVar('nama_kepala_keluarga'),
        // 'jumlah_anggota_keluarga' => $this->request->getVar('jumlah_anggota_keluarga'),
        // 'foto'=>$foto,]);
        $this->pendudukModel->savePenduduk([
            'no_kk' => $this->request->getVar('no_kk'),
            'dusun' => $this->request->getVar('dusun'),
            'rt' => $this->request->getVar('rt'),
            'nik_kepala_keluarga' => $this->request->getVar('nik_kepala_keluarga'),
            'nama_kepala_keluarga' => $this->request->getVar('nama_kepala_keluarga'),
            'jumlah_anggota_keluarga' => $this->request->getVar('jumlah_anggota_keluarga'),
            'foto'=>$foto,

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to('/admin/penduduk/');
    }

    public function editPenduduk($id)
    {

        $data = [
            'title' => 'Form Update product',
            'p' =>  $this->pendudukModel->getPenduduk($id)
        ];
        return view('admin/edit_penduduk', $data);
    }

    public function updatePenduduk($id)
    {

        $path = 'assets/img/';
        $foto = $this->request->getFile('foto');

        // Periksa apakah ada file foto baru yang diunggah
        if ($foto->isValid()) {
            $name = $foto->getRandomName();
            if ($foto->move($path, $name)) {
                $foto = base_url($path . $name);
            }
        } else {
            $existingData = $this->pendudukModel->getPenduduk($id);
            $foto = $existingData['foto'];
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'foto'=>$foto,

        ];

        $result = $this->pendudukModel->updatePenduduk($id, $data);

        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to('admin/penduduk');
    }
    

    public function destroyPenduduk($id)
    {
        $result = $this->pendudukModel->deletePenduduk($id);
        if (!$result) {
            return redirect()->back()->with('Error', 'Gagal menghapus Data');
        }
        return redirect()->to(base_url('/admin/penduduk/'))->with('success', 'Berhasil menghapus data');
    }
}
