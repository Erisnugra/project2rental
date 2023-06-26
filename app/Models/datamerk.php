<?php

namespace App\Models;

use CodeIgniter\Model;

class datamerk extends Model
{
    protected $table = "data_merk";
    protected $primaryKey = "id_merk";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ["id_merk", "merk",];

    public function tambah($data)
    {

        return $this->insert($data);
    }

    public function getpem($id)
    {
        return $this->find($id);
    }

    public function ubah($id, $data)
    {
        return $this->update($id, $data);
    }

    public function hapus($id)
    {
        return $this->delete($id);
    }

    // ubah merk//
    public function ubah_data($id_merk)
    {
        return $this->db->table('data_merk')->where('id_merk', $id_merk)->get()->getRowArray();
    }

    public function update_merk($data, $id_merk)
    {
        return $this->db->table('data_merk')->update($data, array('id_merk' => $id_merk));
    }
}
