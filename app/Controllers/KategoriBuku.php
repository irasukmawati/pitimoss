<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BukuModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;

class KategoriBuku extends BaseController
{
    public function index()
    {
        $kategori = new KategoriModel();
        $buku = new BukuModel();
        $transaksi = new TransaksiModel();
        $detail = new DetailTransaksiModel();
        $data['kat'] = $kategori->findAll();
        $data['buk'] = $buku->findAll();
        $data['statushalaman'] = "";
        $userID = session()->get('kode_user');
        $cek = $transaksi->cek_data($userID);
        $idTransaksi = 0;
        if ($cek)
            $idTransaksi = $cek['kode_transaksi'];
        $data['jmlitem'] = $detail->countDataWithCriteria($idTransaksi);
        echo view('part/header');
        echo view('part/topbar', $data);
        echo view('part/navbar', $data);
        echo view('kategoribuku', $data);
        echo view('part/footer');
    }

    public function view($id)
    {
        $kategori = new KategoriModel();
        $buku = new BukuModel();
        $transaksi = new TransaksiModel();
        $detail = new DetailTransaksiModel();
        $data['kat'] = $kategori->findAll();
        $data['statushalaman'] = "";
        $userID = session()->get('kode_user');
        $cek = $transaksi->cek_data($userID);
        $idTransaksi = 0;
        if ($cek)
            $idTransaksi = $cek['kode_transaksi'];
        $data['jmlitem'] = $detail->countDataWithCriteria($idTransaksi);
        $data['buk'] = $buku->where('kode_kategori', $id)->findAll();
        echo view('part/topbar', $data);
        // echo view('part/header');
        echo view('part/navbar', $data);
        echo view('kategoribuku', $data);
        echo view('part/footer');
    }
    public function detail($id)
    {
        $kategori = new KategoriModel();
        $buku = new BukuModel();
        $transaksi = new TransaksiModel();
        $detail = new DetailTransaksiModel();
        $data['kat'] = $kategori->findAll();
        $data['statushalaman'] = "";
        $userID = session()->get('kode_user');
        $cek = $transaksi->cek_data($userID);
        $idTransaksi = 0;
        if ($cek)
            $idTransaksi = $cek['kode_transaksi'];
        $data['jmlitem'] = $detail->countDataWithCriteria($idTransaksi);
        $data['brg'] = $buku->where('kode_buku', $id)->first();
        $data['buk'] = $buku->where('kode_buku', $id)->findAll();

        // echo view('part/header', $data);
        echo view('part/topbar', $data);
        echo view('part/navbar', $data);
        echo view('detail', $data);
        echo view('part/footer');
    }
}
