<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Kategori extends BaseController
{
    public function index()
    {
        $kategori = new KategoriModel();
        $data['kat'] = $kategori->findAll();
        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('part_dashboard/kategori', $data);
        echo view('part_adm/footer');
    }

    public function tambah()
    {
        error_reporting(0);
        // lakukan validasi
        $validation = \config\Services::validation();
        $validation->setRules(['kode_kategori' => 'required']);
        $validation->setRules(['nama_kategori' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $kat = new KategoriModel();
            $kat->insert([
                "kode_kategori" => $this->request->getPost('kode_kategori'),
                "nama_kategori" => $this->request->getPost('nama_kategori')
            ]);

            return redirect()->to(base_url('kategori'));
        }
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/kategori_add');
        echo view('part_adm/footer');
    }

    public function edit($kode)
    {
        // ambil artikel yang akan diedit
        $kat = new KategoriModel();
        $data['kategori'] = $kat->where('kode_kategori', $kode)->first();
        // lakukan validasi data artikel
        $validation = \config\Services::validation();
        $validation->setRules(['kode_kategori' => 'required']);
        $validation->setRules(['nama_kategori' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $kat->update($kode, [
                "kode_kategori" => $this->request->getPost('kode_kategori')
            ]);
            $kat->update($kode, [
                "nama_kategori" => $this->request->getPost('nama_kategori')
            ]);
            return redirect()->to(base_url('kategori'));
        }
        //tampilkan form edit
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/kategori_edit', $data);
        echo view('part_adm/footer');
    }

    public function delete($kode)
    {
        $kat = new KategoriModel();
        $kat->delete($kode);
        return redirect()->to(base_url('kategori'));
    }
}
