<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tbl_kategori';
    protected $primaryKey = 'kode_kategori';

    //protected $useAutoIncrement = false;
    protected $allowedFields = ['kode_kategori', 'nama_kategori'];
}
?>
