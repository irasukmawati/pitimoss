<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Transaksi extends BaseController
{
    public function index()
    {
        $transaksi = new TransaksiModel();
        $data['trans'] = $transaksi->findAll();
        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('part_dashboard/transaksi', $data);
        echo view('part_adm/footer');
    }

    public function tambah()
    {
        error_reporting(0);
        // lakukan validasi
        $validation = \config\Services::validation();
        $validation->setRules(['kode_transaksi' => 'required']);
        $validation->setRules(['tgl_transaksi' => 'required']);
        $validation->setRules(['kode_user' => 'required']);
        $validation->setRules(['total_bayar' => 'required']);
        $validation->setRules(['diskon' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $trans = new TransaksiModel();
            $trans->insert([
                "kode_transaksi" => $this->request->getPost('kode_transaksi'),
                "tgl_transaksi" => $this->request->getPost('tgl_transaksi'),
                "kode_user" => $this->request->getPost('kode_user'),
                "total_bayar" => $this->request->getPost('total_bayar'),
                "diskon" => $this->request->getPost('diskon'),
            ]);

            return redirect('transaksi');
        }
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/transaksi_add');
        echo view('part_adm/footer');
    }

    public function edit($kode)
    {
        // ambil artikel yang akan diedit
        $trans = new TransaksiModel();
        $data['transaksi'] = $trans->where('kode_transaksi', $kode)->first();
        // lakukan validasi data artikel
        $validation = \config\Services::validation();
        $validation->setRules(['kode_transaksi' => 'required']);
        $validation->setRules(['tgl_transaksi' => 'required']);
        $validation->setRules(['kode_user' => 'required']);
        $validation->setRules(['total_bayar' => 'required']);
        $validation->setRules(['diskon' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $trans->update($kode, [
                "kode_transaksi" => $this->request->getPost('kode_transaksi')
            ]);
            $trans->update($kode, [
                "tgl_transaksi" => $this->request->getPost('tgl_transaksi')
            ]);
            $trans->update($kode, [
                "kode_user" => $this->request->getPost('kode_user')
            ]);
            $trans->update($kode, [
                "total_bayar" => $this->request->getPost('total_bayar')
            ]);
            $trans->update($kode, [
                "diskon" => $this->request->getPost('diskon')
            ]);
            return redirect('transaksi');
        }
        //tampilkan form edit
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/transaksi_edit', $data);
        echo view('part_adm/footer');
    }

    public function delete($kode)
    {
        $buk = new TransaksiModel();
        $buk->delete($kode);
        return redirect('transaksi');
    }
}
