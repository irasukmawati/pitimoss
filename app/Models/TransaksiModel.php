<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tbl_transaksi';
    protected $primaryKey = 'kode_transaksi';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_transaksi', 'tgl_transaksi', 'kode_user', 'total_bayar', 'diskon', 'status'];
    //protected $useTimestamps = true;

    // Relasi dengan Detail Transaksi
    public function detail()
    {
        return $this->hasMany(DetailTransaksiModel::class, 'id_transaksi');
    }

    public function cek_data($kode_user)
    {
        return $this->db->table('tbl_transaksi')
            ->where(array('kode_user' => $kode_user, 'status' => 'awal'))
            ->get()->getRowArray();
    }
}
