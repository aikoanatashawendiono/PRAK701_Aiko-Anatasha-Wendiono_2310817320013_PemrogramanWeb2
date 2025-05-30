<?php

namespace App\Controllers;

use App\Models\UserModel;
class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess()
    {
        helper(['form']);
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'isLoggedIn' => true,
                'username'   => $user['username']
            ]);
            return redirect()->to('/buku');
        }

        return redirect()->back()->with('error', 'Login terlebih dahulu!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
