<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'kode_user';

    //protected $useAutoIncrement = false;

    protected $allowedFields = ['kode_user', 'username', 'password', 'nama_depan', 'nama_belakang', 'no_hp', 'email', 'alamat',  'kode_pos', 'hak_akses', 'no_hp_kerabat'];

    public function generateKodeUser()
    {
        $prefix = 'MM';
        $query = $this->db->table($this->table)
            ->select('RIGHT(kode_user,4) AS idbar')
            ->orderBy('kode_user', 'DESC')
            ->limit(1)
            ->get();

        $lastId = $query->getRow()->idbar;
        if (empty($lastId)) {
            $lastId = 1;
        } else {
            $lastId++;
        }
        $kodeuser = $prefix . str_pad($lastId, 4, '0', STR_PAD_LEFT);
        return $kodeuser;
    }

    public function get_data($username, $password)
    {
        return $this->db->table('tbl_user')
            ->where(array('username' => $username, 'password' => md5($password)))
            ->get()->getRowArray();
    }
}
