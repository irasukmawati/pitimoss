<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Buku extends BaseController
{
    public function index()
    {
        $buku = new BukuModel();
        $data['buk'] = $buku->findAll();
        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('part_dashboard/buku', $data);
        echo view('part_adm/footer');
        // return redirect()->to(base_url('/buku'));
    }

    public function tambah()
    {
        error_reporting(0);
        // lakukan validasi
        $validation = \config\Services::validation();
        $validation->setRules(['judul_buku' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $buk = new BukuModel();
            $dataGambar = $this->request->getFile('foto');
            $fileName = $dataGambar->getRandomName();
            $dataGambar->move('file_gambar/', $fileName);
            $buk->insert([
                "kode_buku" => $this->request->getPost('kode_buku'),
                "kode_kategori" => $this->request->getPost('kode_kategori'),
                "judul_buku" => $this->request->getPost('judul_buku'),
                "volume_buku" => $this->request->getPost('volume_buku'),
                "nama_penerbit" => $this->request->getPost('nama_penerbit'),
                "kondisi_buku" => $this->request->getPost('kondisi_buku'),
                "stok" => $this->request->getPost('stok'),
                "harga" => $this->request->getPost('harga'),
                "foto" => $fileName

            ]);

            return redirect()->to(base_url('buku'));
        }
        $buku = new BukuModel();
        $kategori = new KategoriModel();
        $data['buku'] = $buku;
        $data['kategori'] = $kategori->findAll();

        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/buku_add', $data);
        echo view('part_adm/footer');
    }

    public function edit($kode)
    {
        // ambil artikel yang akan diedit
        $buk = new BukuModel();
        $data['buku'] = $buk->where('kode_buku', $kode)->first();
        // lakukan validasi data artikel
        $validation = \config\Services::validation();
        $validation->setRules(['judul_buku' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $buk = new BukuModel();
            $dataGambar = $this->request->getFile('foto');
            if ($dataGambar) {
                $fileName = $dataGambar->getRandomName();
                $dataGambar->move('file_gambar/', $fileName);
                $buk->update($kode, [
                    "kode_kategori" => $this->request->getPost('kode_kategori'),
                    "judul_buku" => $this->request->getPost('judul_buku'),
                    "volume_buku" => $this->request->getPost('volume_buku'),
                    "nama_penerbit" => $this->request->getPost('nama_penerbit'),
                    "kondisi_buku" => $this->request->getPost('kondisi_buku'),
                    "stok" => $this->request->getPost('stok'),
                    "harga" => $this->request->getPost('harga'),
                    "foto" => $fileName
                ]);
            } else {
                $buk->update($kode, [
                    "kode_kategori" => $this->request->getPost('kode_kategori'),
                    "judul_buku" => $this->request->getPost('judul_buku'),
                    "volume_buku" => $this->request->getPost('volume_buku'),
                    "nama_penerbit" => $this->request->getPost('nama_penerbit'),
                    "kondisi_buku" => $this->request->getPost('kondisi_buku'),
                    "stok" => $this->request->getPost('stok'),
                    "harga" => $this->request->getPost('harga'),
                ]);
            }
            return redirect()->to(base_url('buku'));
        }
        $kategori = new KategoriModel();
        $data['kategori'] = $kategori->findAll();
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/buku_edit', $data);
        echo view('part_adm/footer');
    }

    public function delete($kode)
    {
        $data = new BukuModel();
        $data->delete($kode);
        $buk['buk'] = $data->findAll();
        // echo view('part_adm/header', $buk);
        // echo view('part_adm/top_menu', $buk);
        // echo view('part_adm/side_menu', $buk);
        // echo view('part_dashboard/buku', $buk);
        // echo view('part_adm/footer');
        return redirect()->to(base_url('buku'));
    }
}
