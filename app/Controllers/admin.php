<?php

namespace App\Controllers;

use App\Models\datamobil;

class admin extends BaseController
{
    private $model;
    public function __construct()
    {
        $this->model = new datamobil();
    }

    public function index()
    {
        return view('admin/dashboardadmin');
    }

    public function Pengajuan()
    {
        $data = [
            'data'  => $this->model->join('users', 'users.id_user = data_mobil.id_user')->where('status', null)->findAll()
        ];
        return view('admin/pengajuan', $data);
    }

    public function rental()
    {
        return view('admin/rentalmobil');
    }

    public function kategori()
    {
        return view('admin/kategori');
    }

    public function ubah()
    {
        return view('admin/v_detailpengajuan');
    }
}
