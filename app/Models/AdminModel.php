<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'perangkat_desa';
    protected $primaryKey       = 'nik';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nik', 'nama', 'periode', 'foto'];

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

    public function getPerangkat($nik=null){
        if ($nik !=null) {

            return $this->select('perangkat_desa.*')
                ->find($nik);
        }
        return $this->select('perangkat_desa.*')
                ->findAll();
    }

    public function savePerangkat($data){
        $this->insert($data);       
    }

    public function updatePerangkat($nik, $data) {
        return $this->update($nik, $data);
    }

    public function deletePerangkat($nik) {
        return $this->delete($nik);
    }

}
