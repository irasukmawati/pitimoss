<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;
use App\Models\ShippingModel;
use App\Models\BukuModel;

class Cart extends BaseController
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
        // echo view('part/header', $data);
        echo view('part/topbar');
        echo view('part/navbar', $data);
        echo view('cart', $data);
        echo view('part/footer');
    }

    public function tambahCart()
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
        if ($cek) {
            $idTransaksi = $cek['kode_transaksi'];
            $idItem = $this->request->getPost('kode_buku');
            $cekdetail = $detail->cek_data($idTransaksi, $idItem);
            if ($cekdetail) {
                $idDetail = $cekdetail['kode_detail'];
                $jml = $cekdetail['jumlah'];
                $jumlah = $this->request->getPost('jumlah') + $jml;
                $detail->update($idDetail, [
                    "jumlah" => $jumlah
                ]);
            } else {
                $detail->insert([
                    "kode_transaksi" => $idTransaksi,
                    "kode_buku" => $idItem,
                    "jumlah" => $this->request->getPost('jumlah')
                ]);
            }
        } else {
            $transaksi->insert([
                "tgl_transaksi" => date('Y-m-d'),
                "kode_user" => $userID,
                "status" => "awal"
            ]);
            $idTransaksi = $transaksi->insertID();
            $detail->insert([
                "kode_transaksi" => $idTransaksi,
                "kode_buku" => $this->request->getPost('kode_buku'),
                "jumlah" => $this->request->getPost('jumlah')
            ]);
        }
        return redirect('cart');
    }
    public function delete($id)
    {
        $detail = new DetailTransaksiModel();
        $detail->delete($id);
        return redirect('cart');
    }
    public function checkout()
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
        $data['idtrans'] = $idTransaksi;
        //echo view('part/header', $data);
        echo view('part/topbar', $data);
        echo view('part/navbar');
        echo view('checkout', $data);
        echo view('part/footer');
    }

    public function finishTrans($id)
    {
        $transaksi = new TransaksiModel();
        $shipping = new ShippingModel();
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_lengkap' => 'required', 'no_hp' => 'required', 'alamat' => 'required', 'kota' => 'required', 'kodepos' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid) {
            $detail = new DetailTransaksiModel();
            $buku = new BukuModel();
            $mydata = $detail->getItemsWithDetail($id);
            foreach ($mydata as $datalist) :
                $updatestok = $buku->minus_Stok($datalist['kode_buku'], $datalist['jumlah']);
            endforeach;
            $sekarang = date('Y-m-d');
            $shipping->insert([
                "kode_transaksi" => $id,
                "tgl_pengiriman" => $sekarang,
                "nama_lengkap" => $this->request->getPost('nama_lengkap'),
                "email" => $this->request->getPost('email'),
                "no_hp" => $this->request->getPost('no_hp'),
                "alamat" => $this->request->getPost('alamat'),
                "kota" => $this->request->getPost('kota'),
                "kodepos" => $this->request->getPost('kodepos'),
            ]);
            $transaksi->update($id, [
                "diskon" => $this->request->getPost('diskon'),
                "total_bayar" => $this->request->getPost('grandtotal'),
                "status" => "selesai"
            ]);
            return redirect('/');
        } else {
            return redirect('checkout');
        }
    }
}
