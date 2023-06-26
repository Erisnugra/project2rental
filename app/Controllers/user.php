<?php

namespace App\Controllers;

use App\Models\datacustomer;
use App\Models\datamobil;
use App\Models\dataperjalanan;
use App\Models\datapesanan;

class user extends BaseController
{

    private $ModelMobil, $ModelPesanan, $ModelCustomer, $ModelPerjalanan;

    public function __construct()
    {
        $this->ModelMobil = new datamobil();
        $this->ModelPesanan = new datapesanan();
        $this->ModelCustomer = new datacustomer();
        $this->ModelPerjalanan = new dataperjalanan();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        return view('user/dashboarduser');
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar Mobil',
            'data'  => $this->ModelMobil->findAll()
        ];
        return view('user/daftarmobil', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Daftar Mobil',
            'data'  => $this->ModelMobil->find($id)
        ];
        return view('user/detailmobil', $data);
    }

    public function booking($id)
    {
        $data = [
            'title' => 'Booking Mobil',
            'data'  => $this->ModelMobil->find($id)
        ];
        return view('user/bookingmobil', $data);
    }

    public function proses_booking($id)
    {
        if ($this->request->getPost('tanggal_pinjam') <= date('Y-m-d')) {
            session()->setFlashdata('pesan', 'Tanggal Sewa Minimal H+1 dari Tanggal Sekarang!.');
            return redirect()->back();
        } elseif ($this->request->getPost('tanggal_kembali') < $this->request->getPost('tanggal_pinjam')) {
            session()->setFlashdata('pesan', 'Waktu tanggal kembali tidak valid!.');
            return redirect()->back();
        }
        $dateRange = array(
            $this->request->getPost('tanggal_pinjam'),
            $this->request->getPost('tanggal_kembali')
        );
        $pesanan = $this->ModelPesanan->db->table('data_pesanan')
            ->whereIn('tanggal_pinjam', $dateRange)
            ->orWhereIn('tanggal_kembali', $dateRange)
            ->where('id_mobil', $id)
            ->countAllResults();
        if ($pesanan > 0) {
            session()->setFlashdata('pesan', 'Tanggal yang anda pilih sudah ada yang menyewa!.');
            return redirect()->back();
        }
        // Mengubah tanggal menjadi representasi waktu dalam detik
        $startTimestamp = strtotime($this->request->getPost('tanggal_pinjam'));
        $endTimestamp = strtotime($this->request->getPost('tanggal_kembali'));

        // Menghitung selisih waktu dalam detik
        $timeDiff = abs($endTimestamp - $startTimestamp);

        // Menghitung jarak dalam hari
        $dayDiff = floor($timeDiff / (60 * 60 * 24));
        $data = [
            'title' => 'Proses Booking Mobil',
            'data'  => $this->ModelMobil->find($id),
            'tgl'   => $this->request->getPost(),
            'waktu' => $dayDiff
        ];
        return view('user/proses_booking', $data);
    }

    public function ready()
    {
        return view('user/bookingready');
    }

    public function pesan($id)
    {
        $customer = [
            'nama'  => $this->request->getPost('nama'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'id_user'  => session()->get('id_user'),
        ];
        $this->ModelCustomer->insert($customer);
        $data_terakhirC = $this->ModelCustomer->orderBy('id_customer', 'DESC')->first();
        $pesanan = [
            'id_user'   => session()->get('id_user'),
            'id_customer'   => $data_terakhirC->id_customer,
            'id_mobil'      => $id,
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getPost('tanggal_kembali'),
            'total_harga'   => $this->request->getPost('total_harga'),
            'status'        => 'Melakukan Pembayaran',
            'jenis_bayar'   => 'Tunai'
        ];
        // echo '<pre>';
        // var_dump($pesanan);
        // echo '</pre>';
        // die();
        $this->ModelPesanan->insert($pesanan);
        session()->setFlashdata('pesan', 'Berhasil Membuat Pesanan!.');
        return redirect()->to(base_url('user/riwayat'));
    }

    public function riwayat()
    {
        $data = [
            'title' => 'Riwayat Pesanan',
            'data'  => $this->ModelPesanan
                ->select(['data_pesanan.*', 'data_mobil.nama_mobil', 'data_mobil.harga'])
                ->join('data_mobil', 'data_mobil.id_mobil = data_pesanan.id_mobil')
                ->where('data_pesanan.id_user', session()->get('id_user'))->findAll()
        ];
        // dd($data['data']);
        return view('user/riwayatpesanan', $data);
    }

    public function detail_booking($id)
    {
        $data = [
            'title' => 'Detail Riwayat',
            'data'  => $this->ModelPesanan
                ->join('data_mobil', 'data_mobil.id_mobil = data_pesanan.id_mobil')->find($id)
        ];
        return view('user/bookingdetail', $data);
    }

    public function batal_pesanan($id)
    {
        $this->ModelPesanan->update($id, ['status' => 'Pembayaran Dibatalkan']);
        session()->setFlashdata('pesan', 'Berhasil membatalkan pesanan!.');
        return redirect()->to(base_url('user/riwayat'));
    }
}
