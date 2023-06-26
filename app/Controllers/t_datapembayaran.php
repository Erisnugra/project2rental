<?php

namespace App\Controllers;

use App\Models\datapembayaran;



class t_datapembayaran extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new datapembayaran();
    }
    public function tambah()
    {
        $data = [
            'jenis_bayar' => $this->request->getPost('jenis_bayar'),

        ];

        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url('pembayaran'));
        }
    }



    public function ubah($id_bayar)
    {
        $data = [
            'title' => 'Form Edit Data mobil',
            'mobil' => $this->model->ubah_data($id_bayar)
        ];

        return view('data/v_ubahbayar', $data);
    }
    public function ubahdata($id)
    {
        $data = [
            'jenis_bayar' => $this->request->getPost('jenis_bayar'),



        ];

        $success = $this->model->ubah($id, $data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('pembayaran'));
        }
    }

    public function update($id_bayar)
    {
        $dataValid = [
            'jenis_bayar ' => [
                'label' => 'jenis bayar ',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];


        if ($this->validate($dataValid)) {
            // echo "berhasil";
            // echo $this->request->getPost('tgl_lahir');
            $data = [
                'jenis_bayar' => $this->request->getPost('jenis bayar'),
            ];

            $this->model->update_datapembayaran($data, $id_bayar);
            session()->setFlashdata('success', 'Data Berhasil Diubah');
            return redirect()->to('/datapembayaran');
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function hapus($id)
    {
        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('hapus', 'Data berhasil Di hapus.');
            return redirect()->to(base_url('pembayaran'));
        }
    }
}
