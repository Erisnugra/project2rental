<?php

namespace App\Controllers;


use App\Models\datamerk;


class ubahmerk extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new datamerk();
    }

    public function ubah($id_merk)
    {
        $data = [
            'title' => 'Form Edit Data mobil',
            'mobil' => $this->model->ubah_data($id_merk)
        ];

        return view('data/v_ubahmerek', $data);
    }
    public function ubahdata($id)
    {
        $data = [
            'merk' => $this->request->getPost('merk'),

        ];

        $success = $this->model->ubah($id, $data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('merek'));
        }
    }

    public function update($id_merk)
    {
        $dataValid = [
            'merk ' => [
                'label' => 'merk',
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
                'merk' => $this->request->getPost('merk'),

            ];

            $this->model->update_datamobil($data, $id_merk);
            session()->setFlashdata('success', 'Data Berhasil Diubah');
            return redirect()->to('/datamerek');
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }
}
