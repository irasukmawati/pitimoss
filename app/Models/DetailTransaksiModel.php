<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransaksiModel extends Model
{
    protected $table = 'tbl_detail_transaksi';
    protected $primaryKey = 'kode_detail';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_transaksi', 'kode_buku', 'jumlah',];

    public function Buku()
    {
        return $this->belongsTo(BukuModel::class, 'kode_buku');
    }

    public function getItemsWithDetail($kode_transaksi)
    {
        return $this->join('tbl_buku', 'tbl_detail_transaksi.kode_buku = tbl_buku.kode_buku')
            ->where(array('kode_transaksi' => $kode_transaksi))
            ->select('tbl_detail_transaksi.*, tbl_buku.*')
            ->findAll();
    }
    public function cek_data($kode_transaksi, $kode_buku)
    {
        return $this->db->table('tbl_detail_transaksi')
            ->where(array('kode_transaksi' => $kode_transaksi, 'kode_buku' => $kode_buku))
            ->get()->getRowArray();
    }
    public function countDataWithCriteria($kode_transaksi)
    {
        return $this->where(array('kode_transaksi' => $kode_transaksi))->countAllResults();
    }
    public function getProdukTerlaris()
    {
        $builder = $this->db->table('tbl_detail_transaksi');
        $builder->select('tbl_detail_transaksi.*, SUM(tbl_detail_transaksi.jumlah) as total, tbl_buku.kode_buku, tbl_buku.judul_buku, tbl_buku.foto, tbl_buku.harga');
        $builder->join('tbl_buku', 'tbl_detail_transaksi.kode_buku= tbl_buku.kode_buku');
        $builder->groupBy('tbl_detail_transaksi.kode_buku');
        $builder->orderBy('total', 'DESC');
        $builder->limit(5);

        $query = $builder->get();

        return $query->getResult();
    }
}
