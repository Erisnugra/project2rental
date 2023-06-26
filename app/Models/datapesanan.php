<?php

namespace App\Models;

use CodeIgniter\Model;

class datapesanan extends Model
{
    protected $table = "data_pesanan";
    protected $primaryKey = "id_pesanan";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ["id_pesanan", "id_user", "id_customer", "id_mobil", "tanggal_pinjam", "tanggal_kembali", "total_harga", "status", "jenis_bayar"];

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

    public function ubah_data($id_pesanan)
    {
        return $this->db->table('data_pesanan')->where('id_pesanan', $id_pesanan)->get()->getRowArray();
    }

    public function update_pesanan($data, $id_pesanan)
    {
        return $this->db->table('data_pesanan')->update($data, array('id_pesanan' => $id_pesanan));
    }

    public function datapesanan()
    {
        $query = $this->db->query("SELECT COUNT(id_pesanan) AS jumlah FROM data_pesanan ");
        return $query->getResultArray();
    }
}
