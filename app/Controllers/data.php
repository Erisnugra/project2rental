<?php

namespace App\Controllers;

use App\Models\datamobil;
use App\Models\datapesanan;

class data extends BaseController
{

    private $ModelPesanan;

    public function __construct()
    {
        $this->ModelPesanan = new datapesanan();
    }

    public function index()
    {
        return view('data/merek');
    }
    public function ubahmobil($id)
    {
        $mobil = new datamobil();
        $data = $this->$mobil->getpem($id);
        return view('data/v_ubahmobil', $data);
    }
    public function detailmobil($id)
    {
        $mobil = new datamobil();
        $data['data'] = $mobil->find($id);
        return view('data/v_detailmobil', $data);
    }

    public function ubahmerek()
    {
        return view('data/v_ubahmerek');
    }

    public function ubahcustomer()
    {
        return view('data/v_ubahcustomer');
    }

    public function detailcustomer()
    {
        return view('data/v_detailcustomer');
    }


    public function ubahpesanan()
    {
        return view('data/v_ubahpesanan');
    }

    public function detailpesanan($id)
    {
        $data = [
            'title' => 'Detail Pesanan',
            'data'  => $this->ModelPesanan
                ->select(['data_pesanan.*', 'data_customer.*', 'data_mobil.nama_mobil', 'data_mobil.harga'])
                ->join('data_customer', 'data_customer.id_customer = data_pesanan.id_customer')
                ->join('data_mobil', 'data_mobil.id_mobil = data_pesanan.id_mobil')
                ->find($id)
        ];
        return view('data/v_detailpesanan', $data);
    }

    public function ubahperjalanan()
    {
        return view('data/v_ubahperjalanan');
    }

    public function ubahpembayaran()
    {
        return view('data/v_ubahbayar');
    }
}
