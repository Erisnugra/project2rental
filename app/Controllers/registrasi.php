<?php

namespace App\Controllers;

use App\Models\UsersModel;

class registrasi extends BaseController
{
    protected $UsersModel;
    public function __construct()
    {
        helper('from');
        $this->UsersModel = new UsersModel();
    }
    public function index()
    {
        return view('registrasi/index');
    }

    public function process()
    {
    }
    // if (!$this->validate([
    //     'username' => [
    //         'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
    //         'errors' => [
    //             'required' => '{field} Harus diisi',
    //             'min_length' => '{field} Minimal 4 Karakter',
    //             'max_length' => '{field} Maksimal 20 Karakter',
    //             'is_unique' => 'Username sudah digunakan sebelumnya'
    //         ]
    //     ],

    //     'password' => [
    //         'rules' => 'required|min_length[4]|max_length[50]',
    //         'errors' => [
    //             'required' => '{field} Harus diisi',
    //             'min_length' => '{field} Minimal 4 Karakter',
    //             'max_length' => '{field} Maksimal 20 Karakter',

    //         ]
    //     ],

    //     'name' => [
    //         'rules' => 'required|min_length[4]|max_length[100]',
    //         'errors' => [
    //             'required' => '{field} Harus diisi',
    //             'min_length' => '{field} Minimal 4 Karakter',
    //             'max_length' => '{field} Maksimal 20 Karakter',

    //         ]
    //     ],


    // ])) {
    //     session()->setFlashdata('error', $this->validator->listErrors());
    //     return redirect()->back()->withInput();
    // }

    //     $users = new UsersModel();
    //     // dd($this->request->getPost());
    //     $users->insert([
    //         'username' => $this->request->getVar('username'),
    //         'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
    //         'name' => $this->request->getVar('name')
    //     ]);
    //     return redirect()->to('/login');
    // }

    public function registrasi()
    {
        $data = [
            'title' => 'Daftar Akun',
        ];
        return view('register', $data);
    }

    public function cek_register()
    {

        $registerValid = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada.'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ],
            ],
            'name' => [
                'label' => 'Name',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'role' => [
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],



        ];

        if ($this->validate($registerValid)) {
            //jika valid

            $data = [
                'username'         => $this->request->getPost('username'),
                'password'         => md5($this->request->getPost('password')),
                'name'             => $this->request->getPost('name'),
                'role'             => $this->request->getPost('role')

            ];


            $this->UsersModel->register($data);

            session()->setFlashdata('success', 'Selamat Akun Anda Sudah Terdaftar. Silahkan Login!!!');
            return redirect()->to(base_url('login/index'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }
}
