<?php

namespace App\Controllers;

use App\Models\datacustomer;
use App\Models\datamerk;
use App\Models\datamobil;
use App\Models\datapembayaran;
use App\Models\dataperjalanan;
use App\Models\datapesanan;

class dashboard extends BaseController
{

    private $model;
    public function __construct()
    {
        helper('form');
        $this->model = new datamerk();
    }
    public function tambah()
    {
        $data = [
            'merk' => $this->request->getPost('merk'),
        ];

        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url('merek'));
        }
    }



    public function hapus($id)
    {
        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('hapus', 'Data berhasil Di hapus.');
            return redirect()->to(base_url('merek'));
        }
    }




    public function index()
    {
        $model = new datamobil();
        $mobil = $model->datamobil();

        $modelc = new datacustomer();
        $customer = $modelc->datacustomer();

        $modelp = new datapesanan();
        $pesanan = $modelp->datapesanan();

        $modelb = new datapembayaran();
        $bayar = $modelb->datapembayaran();


        $data['data_mobil'] = $mobil;
        $data['data_customer'] = $customer;
        $data['data_pesanan'] = $pesanan;
        $data['data_pembayaran'] = $bayar;
        return view('data/dashboard', $data);
    }

    public function merek()
    {
        $merek = new datamerk();
        $data['data_merk'] = $merek->findAll();
        return view('data/d_merek', $data);
    }


    public function mobil()
    {
        $mobil = new datamobil();
        $data['data_mobil'] = $mobil->where('id_user', session()->get('id_user'))->findAll();
        return view('data/d_mobil', $data);
    }

    public function customer()
    {
        $customer = new datacustomer();
        $data['data_customer'] = $customer->findAll();
        return view('data/d_customer', $data);
    }

    public function Pembayaran()
    {
        $bayar = new datapembayaran();
        $data['data_pembayaran'] = $bayar->findAll();
        return view('data/d_pembayaran', $data);
    }

    public function Pesanan()
    {
        $pesanan = new datapesanan();
        $data['data_pesanan'] = $pesanan
            ->select(['data_pesanan.*', 'data_customer.*', 'data_mobil.nama_mobil', 'data_mobil.harga'])
            ->join('data_customer', 'data_customer.id_customer=data_pesanan.id_customer')
            ->join('data_mobil', 'data_mobil.id_mobil=data_pesanan.id_mobil')
            ->findAll();
        return view('data/d_pesanan', $data);
    }

    public function perjalanan()
    {
        $perjalanan = new dataperjalanan();
        $data['data_perjalanan'] = $perjalanan->findAll();
        return view('data/d_perjalanan', $data);
    }
}
