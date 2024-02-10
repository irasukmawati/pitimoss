<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\CarouselModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;


class Body extends BaseController
{
    public function index()
    {
        $kategori = new KategoriModel();
        $carousel = new CarouselModel();
        $transaksi = new TransaksiModel();
        $detail = new DetailTransaksiModel();
        $data['buk'] = $detail->getProdukTerlaris();
        $data['kat'] = $kategori->findAll();
        $data['crs'] = $carousel->findAll();
        $data['statushalaman'] = "body";
        $userID = session()->get('kode_user');
        $cek = $transaksi->cek_data($userID);
        $idTransaksi = 0;
        if ($cek)
            $idTransaksi = $cek['kode_transaksi'];
        $data['jmlitem'] = $detail->countDataWithCriteria($idTransaksi);
        echo view('part/topbar');
        echo view('part/navbar', $data);
        echo view('part/header', $data);
        echo view('body', $data);
        echo view('part/footer');
    }
}
