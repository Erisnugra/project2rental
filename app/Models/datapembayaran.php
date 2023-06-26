<?php

namespace App\Models;

use CodeIgniter\Model;

class datapembayaran extends Model
{
    protected $table = "data_pembayaran";
    protected $primaryKey = "id_bayar";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ["id_bayar", "jenis_bayar",];

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

    public function ubah_data($id_bayar)
    {
        return $this->db->table('data_pembayaran')->where('id_bayar', $id_bayar)->get()->getRowArray();
    }

    public function update_pembayaran($data, $id_bayar)
    {
        return $this->db->table('data_pembayaran')->update($data, array('id_bayar' => $id_bayar));
    }

    public function datapembayaran()
    {
        $query = $this->db->query("SELECT COUNT(id_bayar) AS jumlah FROM data_pembayaran ");
        return $query->getResultArray();
    }
}
