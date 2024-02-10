<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        $data['us'] = $user->findAll();
        echo view('part_adm/header');
        echo view('part_adm/top_menu', $data);
        echo view('part_adm/side_menu', $data);
        echo view('part_dashboard/user', $data);
        echo view('part_adm/footer');
    }

    public function tambah()
    {
        error_reporting(0);
        // lakukan validasi
        $validation = \config\Services::validation();
        $validation->setRules(['kode_user' => 'required']);
        $validation->setRules(['username' => 'required']);
        $validation->setRules(['password' => 'required']);
        $validation->setRules(['nama_depan' => 'required']);
        $validation->setRules(['nama_belakang' => 'required']);
        $validation->setRules(['no_hp' => 'required']);
        $validation->setRules(['email' => 'required']);
        $validation->setRules(['alamat' => 'required']);
        $validation->setRules(['kode_pos' => 'required']);
        $validation->setRules(['hak_akses' => 'required']);
        $validation->setRules(['no_hp_kerabat' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $us = new UserModel();
            $us->insert([
                "kode_user" => $this->request->getPost('kode_user'),
                "username" => $this->request->getPost('username'),
                "password" => $this->request->getPost('password'),
                "nama_depan" => $this->request->getPost('nama_depan'),
                "nama_belakang" => $this->request->getPost('nama_belakang'),
                "no_hp" => $this->request->getPost('no_hp'),
                "email" => $this->request->getPost('email'),
                "alamat" => $this->request->getPost('alamat'),
                "kode_pos" => $this->request->getPost('kode_pos'),
                "hak_akses" => $this->request->getPost('hak_akses'),
                "no_hp_kerabat" => $this->request->getPost('no_hp_kerabat'),
            ]);

            return redirect('user');
        }
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/user_add');
        echo view('part_adm/footer');
    }

    public function edit($kode)
    {
        // ambil artikel yang akan diedit
        $us = new UserModel();
        $data['user'] = $us->where('kode_user', $kode)->first();
        // lakukan validasi data artikel
        $validation = \config\Services::validation();
        $validation->setRules(['kode_user' => 'required']);
        $validation->setRules(['username' => 'required']);
        $validation->setRules(['password' => 'required']);
        $validation->setRules(['nama_depan' => 'required']);
        $validation->setRules(['nama_belakang' => 'required']);
        $validation->setRules(['no_hp' => 'required']);
        $validation->setRules(['email' => 'required']);
        $validation->setRules(['alamat' => 'required']);
        $validation->setRules(['kode_pos' => 'required']);
        $validation->setRules(['hak_akses' => 'required']);
        $validation->setRules(['no_hp_kerabat' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $us->update($kode, [
                "kode_user" => $this->request->getPost('kode_user')
            ]);
            $us->update($kode, [
                "username" => $this->request->getPost('username')
            ]);
            $us->update($kode, [
                "password" => $this->request->getPost('password')
            ]);
            $us->update($kode, [
                "nama_depan" => $this->request->getPost('nama_depan')
            ]);
            $us->update($kode, [
                "nama_belakang" => $this->request->getPost('nama_belakang')
            ]);
            $us->update($kode, [
                "no_hp" => $this->request->getPost('no_hp')
            ]);
            $us->update($kode, [
                "email" => $this->request->getPost('email')
            ]);
            $us->update($kode, [
                "alamat" => $this->request->getPost('alamat')
            ]);
            $us->update($kode, [
                "kode_pos" => $this->request->getPost('kode_pos')
            ]);
            $us->update($kode, [
                "hak_akses" => $this->request->getPost('hak_akses')
            ]);
            $us->update($kode, [
                "no_hp_kerabat" => $this->request->getPost('no_hp_kerabat')
            ]);
            return redirect('user');
        }
        //tampilkan form edit
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('part_adm/side_menu');
        echo view('part_dashboard/user_edit', $data);
        echo view('part_adm/footer');
    }

    public function delete($kode)
    {
        $buk = new UserModel();
        $buk->delete($kode);
        return redirect('user');
    }
}
