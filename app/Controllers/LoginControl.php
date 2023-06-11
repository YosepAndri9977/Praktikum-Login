<?php

namespace App\Controllers;

class LoginControl extends BaseController
{
    public function index()
    {
        return view('asisten/login');
    }
    public function Home()
    {
        $session = session();
        if ($session->has('User')) {
            $item = $session->get('User');
            if ($item == 'admin') {
                return view('login/home');
            } else {
                return view('asisten/login');
            }
        } else {
        return view('asisten/login');
        }
    }

    public function check()
    {
        $user = $this->request->getPost(['User']);
        $pass = $this->request->getPost(['Password']);

        $model = model(ModelLogin::class);
        $login = $model->Mengambil($user);

        if(!empty($login)){
            if($pass['Password'] == $login['password']){
                $session = session();
                $session->set('pengguna', $login['username']);
                return redirect()->route('asisten');
            } else {
                return view('asisten/login');
            }
        } else {
            return view('asisten/login');
        }

    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return redirect()->route('asisten/login');
    }
}