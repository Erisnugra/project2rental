<?php

namespace App\Controllers;

use App\Models\datamobil;
use App\Models\UsersModel;

class admin extends BaseController
{
    private $model, $ModelUser;
    public function __construct()
    {
        $this->model = new datamobil();
        $this->ModelUser = new UsersModel();
    }

    public function index()
    {
        return view('admin/dashboardadmin');
    }

    public function Pengajuan()
    {
        $data = [
            'data'  => $this->model->join('users', 'users.id_user = data_mobil.id_user')->findAll()
        ];
        return view('admin/pengajuan', $data);
    }

    public function rental()
    {
        $data = [
            'data'  => $this->model->join('users', 'users.id_user = data_mobil.id_user')->where('status', 'Disetujui')->findAll()
        ];
        return view('admin/rentalmobil', $data);
    }

    public function kategori()
    {
        return view('admin/kategori');
    }

    public function detailpengajuan($id)
    {
        $data = [
            'data'  => $this->model->join('users', 'users.id_user = data_mobil.id_user')->find($id)
        ];
        // dd($data);
        return view('admin/v_detailpengajuan', $data);
    }

    public function detailrental($id)
    {
        $data = [
            'data'  => $this->model->join('users', 'users.id_user = data_mobil.id_user')->find($id)
        ];
        // dd($data);
        return view('admin/v_detailrental', $data);
    }

    public function ubahpengajuan($id)
    {
        $data = [
            'data'  => $this->model->join('users', 'users.id_user = data_mobil.id_user')->find($id)
        ];
        // dd($data);
        return view('admin/v_ubahpengajuan', $data);
    }

    public function prosesubah($id)
    {
        $this->model->update($id, ['status' => $this->request->getPost('status')]);
        session()->setFlashdata('success', 'Pengajuan Berhasil Diubah');
        return redirect()->to(base_url('admin/pengajuan'));
    }

    public function kelolapenyewa()
    {
        $data = [
            'data'  => $this->ModelUser->where('role', 'Penyewa')->findAll()
        ];
        return view('admin/v_kelolapenyewa', $data);
    }

    public function nonaktif($id)
    {
        $this->ModelUser->update($id, ['status_user' => 'Non Aktif']);
        session()->setFlashdata('success', 'Berhasil Menonaktifkan akun');
        return redirect()->to(base_url('admin/kelolapenyewa'));
    }

    public function aktifkan($id)
    {
        $this->ModelUser->update($id, ['status_user' => 'Aktif']);
        session()->setFlashdata('success', 'Berhasil Mengaktifkan akun');
        return redirect()->to(base_url('admin/kelolapenyewa'));
    }
}
