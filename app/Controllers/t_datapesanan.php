<?php

namespace App\Controllers;

use App\Models\datapesanan;



class t_datapesanan extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new datapesanan();
    }
    public function tambah()
    {
        $data = [
            'nama_pemesan' => $this->request->getPost('nama_pemesan'),
            'mobil' => $this->request->getPost('mobil'),
            'perjalanan' => $this->request->getPost('perjalanan'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getPost('tanggal_kembali'),
            'total_harga' => $this->request->getPost('total_harga'),
            'jenis_bayar' => $this->request->getPost('jenis_bayar'),

        ];

        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url('pesanan'));
        }
    }

    public function ubah($id_pesanan)
    {
        $data = [
            'title' => 'Form Edit Data mobil',
            'data' => $this->model
                ->join('data_customer', 'data_customer.id_customer = data_pesanan.id_customer')
                ->join('data_mobil', 'data_mobil.id_mobil = data_pesanan.id_mobil')
                ->find($id_pesanan)
        ];

        return view('data/v_ubahpesanan', $data);
    }
    public function ubahdata($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama_pemesan'),
            'mobil' => $this->request->getPost('mobil'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getPost('tanggal_kembali'),
            'status' => $this->request->getPost('status'),
            'total_harga' => $this->request->getPost('total_harga'),
            'jenis_bayar' => $this->request->getPost('jenis_bayar'),
        ];

        $success = $this->model->ubah($id, $data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('pesanan'));
        }
    }

    public function update($id_pesanan)
    {
        $dataValid = [
            'nama_pemesan ' => [
                'label' => 'nama pemesan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'mobil' => [
                'label' => 'mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'perjalanan' => [
                'label' => 'perjalanan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal_pinjam' => [
                'label' => 'tanggal pinjam',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal_kembali' => [
                'label' => 'tanggal_kembali',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'total_harga' => [
                'label' => 'total harga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],

            'jenis_bayar' => [
                'label' => 'jenis_bayar',
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
                'nama_pemesan' => $this->request->getPost('nama_pemesan'),
                'mobil' => $this->request->getPost('mobil'),
                'perjalanan' => $this->request->getPost('perjalanan'),
                'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
                'tanggal_kembali' => $this->request->getPost('tanggal_kembali'),
                'total_harga' => $this->request->getPost('total_harga'),
                'jenis_bayar' => $this->request->getPost('jenis_bayar'),

            ];

            $this->model->update_datapesanan($data, $id_pesanan);
            session()->setFlashdata('success', 'Data Berhasil Diubah');
            return redirect()->to('/datapesanan');
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
            return redirect()->to(base_url('pesanan'));
        }
    }
}
