<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KategoriModel;
use App\Models\BukuModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Register extends BaseController
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
        echo view('part/topbar', $data);
        echo view('part/navbar', $data);
        echo view('register');
        echo view('part/footer');
    }


    public function simpan()
    {
        $usr = new UserModel();
        $usr->insert([
            "kode_user" => $this->request->getPost('kode_user'),
            "username" => $this->request->getPost('username'),
            "password" => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            "nama_depan" => $this->request->getPost('nama_depan'),
            "nama_belakang" => $this->request->getPost('nama_belakang'),
            "no_hp" => $this->request->getPost('no_hp'),
            "email" => $this->request->getPost('email'),
            "alamat" => $this->request->getPost('alamat'),
            "kode_pos" => $this->request->getPost('kode_pos'),
            "hak_akses" => "user",
            "no_hp_kerabat" => $this->request->getPost('no_hp_kerabat'),
        ]);
        return redirect('login');
    }
}
