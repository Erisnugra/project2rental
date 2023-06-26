<?php

namespace App\Models;

use CodeIgniter\Model;

class datacustomer extends Model
{
    protected $table = "data_customer";
    protected $primaryKey = "id_customer";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ["id_customer", "nama", "jenis_kelamin", "alamat", "id_user"];

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


    public function ubah_data($id_customer)
    {
        return $this->db->table('data_customer')->where('id_customer', $id_customer)->get()->getRowArray();
    }

    public function update_customer($data, $id_customer)
    {
        return $this->db->table('data_customer')->update($data, array('id_customer' => $id_customer));
    }
    public function datacustomer()
    {
        $query = $this->db->query("SELECT COUNT(id_customer) AS jumlah FROM data_customer ");
        return $query->getResultArray();
    }
}
