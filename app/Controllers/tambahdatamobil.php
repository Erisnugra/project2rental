<?php

namespace App\Controllers;


use App\Models\datamobil;


class tambahdatamobil extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new datamobil();
    }

    public function tambah()
    {
        // var_dump($this->request->getFile('gambar'));
        // die();
        $loginValidasi = [
            'nama_merk' => [
                'label' => 'Nama Merk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'nama_mobil' => [
                'label' => 'Nama Mobil atau Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'warna_mobil' => [
                'label' => 'Warna Mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'jumlah_kursi' => [
                'label' => 'Jumlah Kursi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'no_polisi' => [
                'label' => 'No Polisi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'tahun_beli' => [
                'label' => 'Tahun Beli',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'harga' => [
                'label' => 'Harga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'foto' => [
                'label' => 'Gambar',
                'rules' => 'uploaded[foto]|max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ],
            ],
        ];

        if ($this->validate($loginValidasi)) {
            $gambar = $this->request->getFile('foto');
            $nama = $gambar->getRandomName();
            $gambar->move('foto_mobil', $nama);

            $data = [
                'nama_merk' => $this->request->getPost('nama_merk'),
                'nama_mobil' => $this->request->getPost('nama_mobil'),
                'warna_mobil' => $this->request->getPost('warna_mobil'),
                'jumlah_kursi' => $this->request->getPost('jumlah_kursi'),
                'no_polisi' => $this->request->getPost('no_polisi'),
                'tahun_beli' => $this->request->getPost('tahun_beli'),
                'harga' => $this->request->getPost('harga'),
                'gambar' => $nama,
                'id_user' => session()->get('id_user'),
            ];


            $success = $this->model->tambah($data);
            if ($success) {
                session()->setFlashdata('success', 'Data berhasil ditambahkan.');
                return redirect()->to(base_url('mobil'));
            }
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('mobil'))->withInput();
        }
    }

    public function ubah($id_mobil)
    {
        $data = [
            'title' => 'Form Edit Data mobil',
            'mobil' => $this->model->ubah_data($id_mobil)
        ];

        return view('data/v_ubahmobil', $data);
    }
    public function ubahdata($id)
    {
        $loginValidasi = [
            'merk' => [
                'label' => 'Nama Merk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'nama' => [
                'label' => 'Nama Mobil atau Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'warna' => [
                'label' => 'Warna Mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'jumlah_kursi' => [
                'label' => 'Jumlah Kursi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'no_polisi' => [
                'label' => 'No Polisi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'tahun_beli' => [
                'label' => 'Tahun Beli',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'harga' => [
                'label' => 'Harga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'foto' => [
                'label' => 'Gambar',
                'rules' => 'max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ],
            ],
        ];

        if ($this->validate($loginValidasi)) {

            $gambar = $this->request->getFile('foto');
            if ($gambar->getError() == 4) {
                $data = [
                    'nama_merk' => $this->request->getPost('merk'),
                    'nama_mobil' => $this->request->getPost('nama'),
                    'warna_mobil' => $this->request->getPost('warna'),
                    'jumlah_kursi' => $this->request->getPost('jumlah_kursi'),
                    'no_polisi' => $this->request->getPost('no_polisi'),
                    'harga' => $this->request->getPost('harga'),
                    'tahun_beli' => $this->request->getPost('tahun_beli'),
                ];

                $this->model->ubah($id, $data);
            } else {
                $mobil = $this->model->find($id);
                unlink('foto_mobil/' . $mobil->gambar);

                $nama = $gambar->getRandomName();
                $gambar->move('foto_mobil', $nama);


                $data = [
                    'nama_merk' => $this->request->getPost('merk'),
                    'nama_mobil' => $this->request->getPost('nama'),
                    'warna_mobil' => $this->request->getPost('warna'),
                    'jumlah_kursi' => $this->request->getPost('jumlah_kursi'),
                    'no_polisi' => $this->request->getPost('no_polisi'),
                    'tahun_beli' => $this->request->getPost('tahun_beli'),
                    'harga' => $this->request->getPost('harga'),
                    'gambar' => $nama,


                ];

                $this->model->ubah($id, $data);
            }
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('mobil'));
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('mobil'))->withInput();
        }
    }

    public function update($id_mobil)
    {
        $dataValid = [
            'nama_mobil ' => [
                'label' => 'nama mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'warna_mobil' => [
                'label' => 'warna mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'jumlah_kursi' => [
                'label' => 'jumlah kursi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'no_polisi' => [
                'label' => 'no polisi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tahun_beli' => [
                'label' => 'tahun beli',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'gambar' => [
                'label' => 'gambar',
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
                'nama_mobil' => $this->request->getPost('nama_mobil'),
                'warna_mobil' => $this->request->getPost('warna_mobil'),
                'jumlah_kursi' => $this->request->getPost('jumlah_kursi'),
                'no_polisi' => $this->request->getPost('no_polisi'),
                'tahun_beli' => $this->request->getPost('tahun_beli'),
                'gambar' => $this->request->getPost('gambar'),
            ];

            $this->model->update_datamobil($data, $id_mobil);
            session()->setFlashdata('success', 'Data Berhasil Diubah');
            return redirect()->to('/datamobil');
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function hapus($id)
    {
        $mobil = $this->model->find($id);
        unlink('foto_mobil/' . $mobil->gambar);
        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil Di hapus.');
            return redirect()->to(base_url('mobil'));
        }
    }
}
