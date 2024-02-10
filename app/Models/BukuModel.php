<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'tbl_buku';
    protected $primaryKey = 'kode_buku';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_buku', 'kode_kategori', 'judul_buku', 'volume_buku', 'nama_penerbit', 'kondisi_buku', 'stok', 'harga', 'foto'];

    public function minus_Stok($kode_buku, $jumlah)
    {
        $buku = $this->find($kode_buku);
        if (!$buku) {
            return false; // Barang tidak ditemukan
        }
        $stok_sekarang = $buku['stok'];
        if ($stok_sekarang < $jumlah) {
            return false; // Stok tidak mencukupi
        }
        $stok_baru = $stok_sekarang - $jumlah;
        $data = ['stok' => $stok_baru];
        $this->update($kode_buku, $data);
        return true; // Stok berhasil dikurangi
    }
}
