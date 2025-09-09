<?php
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('DisplayLogin');
    }

    public function auth()
    {
        $nim = $this->request->getPost('nim');
        $username = $this->request->getPost('username');

        $model = new UserModel();
        $user = $model->where('nim', $nim)->where('username', $username)->first();

        if ($user) {
            // simpan status login ke session
            session()->set('isLoggedIn', true);
            session()->set('nim', $user['nim']);
            session()->set('username', $user['username']);

            return redirect()->to('/home');
        } else {
            return redirect()->back()->with('error', 'NIM atau Username salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
