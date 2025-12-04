<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login', [
            'title' => 'Masuk Panel Gereja'
        ]);
    }

    public function authenticate()
    {
        $rules = [
            'role' => 'required|in_list[tata-usaha,bendahara]',
            'username' => 'required',
            'password' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $role = $this->request->getPost('role');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $mockCredentials = [
            'tata-usaha' => ['username' => 'tatausaha', 'password' => 'password123'],
            'bendahara' => ['username' => 'bendahara', 'password' => 'password123'],
        ];

        $valid = isset($mockCredentials[$role])
            && $mockCredentials[$role]['username'] === $username
            && $mockCredentials[$role]['password'] === $password;

        if (! $valid) {
            return redirect()->back()->withInput()->with('error', 'Kombinasi role, username, atau password salah.');
        }

        session()->set('auth', [
            'role' => $role,
            'username' => $username,
        ]);

        $redirectPath = $role === 'tata-usaha' ? '/panel/tata-usaha' : '/panel/bendahara';

        return redirect()->to($redirectPath);
    }

    public function logout()
    {
        $session = session();
        $session->remove('auth');
        $session->regenerate(true);

        return redirect()->to('/Auth/login')->with('message', 'Anda telah keluar dari sesi.');
    }
}
