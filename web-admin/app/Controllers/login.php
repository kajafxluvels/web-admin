<?php

namespace App\Controllers;
use App\Models\User_model;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('admin-dasboard/loginview');
    }
    public function auth() {
        $session = session();
        $usermodel = new User_model();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $hasil = $usermodel->where('Username', $username)->first();

        if($hasil){
            if (password_verify($password, $hasil['Password'])) {
                $session->set([
                        'username' => $hasil['Username'],
                        'nama' => $hasil['Nama'],
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to('/dasboard');
            }
            else {
                $session->setFlashdata('msg', 'Password yang anda masukan salah!');
                return redirect()->to('/login');
            }
        }
        else {
            $session->setFlashdata('msg', 'username tidak ada');
            return redirect()->to('/login');
        }
    }
}
