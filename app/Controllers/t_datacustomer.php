<?php

namespace App\Controllers;

use App\Models\datacustomer;



class t_datacustomer extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new datacustomer();
    }
    public function tambah()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'id_user' => session()->get('id_user'),

        ];

        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url('customer'));
        }
    }


    public function ubah($id_customer)
    {
        $data = [
            'title' => 'Form Edit Data mobil',
            'mobil' => $this->model->ubah_data($id_customer)
        ];

        return view('data/v_ubahcustomer', $data);
    }
    public function ubahdata($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),


        ];

        $success = $this->model->ubah($id, $data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('customer'));
        }
    }

    public function update($id_customer)
    {
        $dataValid = [
            'nama ' => [
                'label' => 'nama ',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'jenis_kelamin' => [
                'label' => 'jenis_kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'alamat' => [
                'label' => 'alamat',
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
                'nama' => $this->request->getPost('nama'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'alamat' => $this->request->getPost('alamat'),

            ];

            $this->model->update_datacustomer($data, $id_customer);
            session()->setFlashdata('success', 'Data Berhasil Diubah');
            return redirect()->to('/datacustomer');
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
            return redirect()->to(base_url('customer'));
        }
    }
}
