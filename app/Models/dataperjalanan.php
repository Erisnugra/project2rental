<?php

namespace App\Models;

use CodeIgniter\Model;

class dataperjalanan extends Model
{
    protected $table = "data_perjalanan";
    protected $primaryKey = "id_perjalanan";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ["id_perjalanan", "kota_asal", "kota_tujuan"];

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


    public function ubah_data($id_perjalanan)
    {
        return $this->db->table('data_perjalanan')->where('id_perjalanan', $id_perjalanan)->get()->getRowArray();
    }

    public function update_perjalanan($data, $id_perjalanan)
    {
        return $this->db->table('data_perjalanan')->update($data, array('id_perjalanan' => $id_perjalanan));
    }
}
