<?php

namespace App\Models;

use CodeIgniter\Model;

class datamobil extends Model
{
    protected $table = "data_mobil";
    protected $primaryKey = "id_mobil";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ["id_mobil", "nama_merk", "nama_mobil", "warna_mobil", "jumlah_kursi", "no_polisi", "tahun_beli", "harga", "gambar", "id_user", "status"];

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

    // ubah data//

    public function ubah_data($id_mobil)
    {
        return $this->db->table('data_mobil')->where('id_mobil', $id_mobil)->get()->getRowArray();
    }

    public function update_mobil($data, $id_mobil)
    {
        return $this->db->table('data_mobil')->update($data, array('id_mobil' => $id_mobil));
    }

    public function datamobil()
    {
        $query = $this->db->query("SELECT COUNT(nama_mobil) AS jumlah FROM data_mobil ");
        return $query->getResultArray();
    }
}
