<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KategoriModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;
use App\Models\BukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Login extends BaseController
{

    public function index()
    {
        $kategori = new KategoriModel();
        $buku = new BukuModel();
        $transaksi = new TransaksiModel();
        $detail = new DetailTransaksiModel();
        $data['kat'] = $kategori->findAll();
        $data['buk'] = $buku->findAll();
        $data['statushalaman'] = "";
        $userID = session()->get('kode_user');
        $cek = $transaksi->cek_data($userID);
        $idTransaksi = 0;
        if ($cek)
            $idTransaksi = $cek['kode_transaksi'];
        $data['jmlitem'] = $detail->countDataWithCriteria($idTransaksi);
        echo view('part/topbar', $data);
        echo view('part/navbar', $data);
        echo view('part_dashboard/login', $data);
        echo view('part/footer');
    }


    public function login_action()
    {
        $muser = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $cek = $muser->get_data($username, $password);
        $data = $muser->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = md5($password, $pass);
            if ($authenticatePassword) {
                session()->set([
                    'username' => $data['username'],
                    'hak_akses' => $data['hak_akses'],
                    'kode_user' => $data['kode_user'],
                ]);

                // Redirect based on user role
                $redirect_url = $data['hak_akses'] === 'Admin' ? 'dashboard' : 'home';
                return redirect()->to($redirect_url);
            } else {
                session()->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('login');
            }
        } else {
            session()->setFlashdata('msg', 'username does not exist.');
            return redirect()->to('login');
        }
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }
}
