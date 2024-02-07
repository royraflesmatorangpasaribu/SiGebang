<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\BeritaModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{   
    public $adminModel, $beritaModel;

    public function __construct(){
        $this->adminModel = new AdminModel();
        $this->beritaModel = new BeritaModel();
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
            'title' => 'Penduduk'
        ];
        return view('admin/penduduk', $data);
    }
}
