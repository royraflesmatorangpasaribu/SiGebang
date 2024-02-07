<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table            = 'penduduk';
    protected $primaryKey       = 'no_kk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['dusun', 'rt', 'nik_kepala_keluarga', 'nama_kepala_keluarga',
'jumlah_anggota_keluarga', 'foto'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPenduduk($no_kk=null){
        if ($no_kk !=null) {

            return $this->select('penduduk.*')
                ->find($no_kk);
        }
        return $this->select('penduduk.*')
                ->findAll();
    }

    public function savePenduduk($data){
        $this->insert($data);       
    }

    public function updatePenduduk($no_kk, $data) {
        return $this->update($no_kk, $data);
    }

    public function deletePenduduk($no_kk) {
        return $this->delete($no_kk);
    }

}
