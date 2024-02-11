<?php

namespace App\Controllers;

use App\Models\DetailTransaksiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class DetailTransaksi extends BaseController
{
    public function index()
    {
        $detailtransaksi = new DetailTransaksiModel();
        $data['detail'] = $detailtransaksi->findAll();
        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('part_dashboard/detailtransaksi', $data);
        echo view('part_adm/footer');
    }

    public function tambah()
    {
        error_reporting(0);
        // lakukan validasi
        $validation = \config\Services::validation();
        $validation->setRules(['kode_detail' => 'required']);
        $validation->setRules(['kode_transaksi' => 'required']);
        $validation->setRules(['kode_buku' => 'required']);
        $validation->setRules(['jumlah' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $detail = new DetailTransaksiModel();
            $detail->insert([
                "kode_detail" => $this->request->getPost('kode_detail'),
                "kode_transaksi" => $this->request->getPost('kode_transaksi'),
                "kode_buku" => $this->request->getPost('kode_buku'),
                "jumlah" => $this->request->getPost('jumlah'),
            ]);

            return redirect()->to(base_url('detailtransaksi'));
        }
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/detailtransaksi_add');
        echo view('part_adm/footer');
    }

    public function edit($kode)
    {
        // ambil artikel yang akan diedit
        $detail = new DetailTransaksiModel();
        $data['detailtransaksi'] = $detail->where('kode_detail', $kode)->first();
        // lakukan validasi data artikel
        $validation = \config\Services::validation();
        $validation->setRules(['kode_detail' => 'required']);
        $validation->setRules(['kode_transaksi' => 'required']);
        $validation->setRules(['kode_buku' => 'required']);
        $validation->setRules(['jumlah' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $detail->update($kode, [
                "kode_detail" => $this->request->getPost('kode_detail')
            ]);
            $detail->update($kode, [
                "kode_transaksi" => $this->request->getPost('kode_transaksi')
            ]);
            $detail->update($kode, [
                "kode_buku" => $this->request->getPost('kode_buku')
            ]);
            $detail->update($kode, [
                "jumlah" => $this->request->getPost('jumlah')
            ]);
            return redirect()->to(base_url('detailtransaksi'));
        }
        //tampilkan form edit
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/detailtransaksi_edit', $data);
        echo view('part_adm/footer');
    }

    public function delete($kode)
    {
        $buk = new DetailTransaksiModel();
        $buk->delete($kode);
        return redirect()->to(base_url('detailtransaksi'));
    }
}
