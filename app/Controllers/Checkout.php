<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;


class Checkout extends BaseController
{
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        $kategori = new KategoriModel();
        $transaksi = new TransaksiModel();
        $detail = new DetailTransaksiModel();
        $data['kat'] = $kategori->findAll();
        $userID = session()->get('kode_user');
        $data['statushalaman'] = "";
        $cek = $transaksi->cek_data($userID);
        $idTransaksi = 0;
        if ($cek)
            $idTransaksi = $cek['kode_transaksi'];
        $data['jmlitem'] = $detail->countDataWithCriteria($idTransaksi);
        $data['detail'] = $detail->getItemsWithDetail($idTransaksi);
        echo view('part/topbar');
        echo view('part/navbar', $data);
        echo view('checkout');
        echo view('part/footer');
    }
}
