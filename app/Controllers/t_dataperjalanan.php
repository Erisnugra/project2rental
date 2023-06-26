<?php

namespace App\Controllers;

use App\Models\dataperjalanan;



class t_dataperjalanan extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new dataperjalanan();
    }
    public function tambah()
    {
        $data = [
            'kota_asal' => $this->request->getPost('kota_asal'),
            'kota_tujuan' => $this->request->getPost('kota_tujuan'),
            'jarak_tempuh' => $this->request->getPost('jarak_tempuh'),

        ];

        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url('perjalanan'));
        }
    }

    public function ubah($id_perjalanan)
    {
        $data = [
            'title' => 'Form Edit Data mobil',
            'mobil' => $this->model->ubah_data($id_perjalanan)
        ];

        return view('data/v_ubahperjalanan', $data);
    }
    public function ubahdata($id)
    {
        $data = [
            'kota-asal' => $this->request->getPost('kota_asal'),
            'kota_tujuan' => $this->request->getPost('kota_tujuan'),
            'jarak_tempuh' => $this->request->getPost('jarak_tempuh'),



        ];

        $success = $this->model->ubah($id, $data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('perjalanan'));
        }
    }

    public function update($id_perjalanan)
    {
        $dataValid = [
            'kota_asal ' => [
                'label' => 'kota_asal',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],

            'kota_tujuan' => [
                'label' => 'kota_tujuan ',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],

            'jarak_tempuh ' => [
                'label' => 'jarak_tempuh ',
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
                'kota_asal' => $this->request->getPost('kota_asal'),
                'kota_tujuan' => $this->request->getPost('kota_tujuan'),
                'jarak_tempuh' => $this->request->getPost('jarak_tempuh'),


            ];

            $this->model->update_dataperjalanan($data, $id_perjalanan);
            session()->setFlashdata('success', 'Data Berhasil Diubah');
            return redirect()->to('/dataperjalanan');
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
            return redirect()->to(base_url('perjalanan'));
        }
    }
}
