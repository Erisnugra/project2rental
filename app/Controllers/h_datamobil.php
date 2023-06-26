<?php

namespace App\Controllers;

use App\Models\datamobil;



class h_datamobil extends BaseController
{

    private $model;
    public function __construct()
    {
        $this->model = new datamobil();
    }

    public function hapus()
    {
        $data = [
            'nama_merk' => $this->model->get_all_data(),
            'nama_mobil' => $this->model->get_all_data(),
            'warna_mobil' => $this->model->get_all_data(),
            'jumlah_kursi' => $this->model->get_all_data(),
            'no_polisi' => $this->model->get_all_data(),
            'tahun_beli' => $this->model->get_all_data(),

        ];
        return view('mobil', $data);
    }

    public function hapusmobil($id)
    {
        $data = [
            'id' => $id
        ];
        $this->model->hapusdata($data);
        session()->setFlashdata('pesan', 'Berhasil Menghapus Data');
        return redirect()->to(base_url('mobil'));
    }
}
