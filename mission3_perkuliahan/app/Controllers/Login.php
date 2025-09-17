<?php
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('displayLogin');
    }

    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'id'        => $user['user_id'],
                'username'  => $user['username'],
                'role'      => $user['role'],
                'full_name' => $user['full_name'],
                'isLoggedIn'=> true
            ]);

            // Arahkan sesuai role
            if ($user['role'] == 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/mahasiswa/dashboard');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
