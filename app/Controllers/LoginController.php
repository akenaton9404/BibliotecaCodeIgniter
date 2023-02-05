<?php

namespace App\Controllers;

use App\Models\UtentiModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class LoginController extends Controller {
    public function index() {
        helper(['form']);
        echo view('/sections/header.php', ['styles' => [base_url('css/login.css')]]) . view('login') . view('/sections/footer.php');
    }

    public function loginAuth() {
        $session = session();
        $utenteModel = new UtentiModel();
        $username = $this->request->getVar('login_username');
        $password = $this->request->getVar('login_password');

        $data = $utenteModel->where('username', $username)->first();

        if ($data) {
            $hashed_password = $data['password_hash'];
            if (password_verify($password, $hashed_password)) {
                $ses_data = [
                    'id'         => $data['id'],
                    'username'   => $data['username'],
                    'isLoggedIn' => true
                ];
                $session->set($ses_data);

                $utenteModel->update($data['id'], ['last_access' => new Time('now', 'America/Chicago', 'en_US'), 'last_ip' => $this->request->getIPAddress()]);

                return redirect()->to('/tables');
            } else {
                $session->setFlashdata('login_password_error', 'wrong password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('login_username_error', 'no username');
            return redirect()->to('/login');
        }
    }

    public function store() {
        helper(['form']);
        $rules = [
            'register_username' => 'required|min_length[3]|max_length[60]',
            'register_password' => 'required|min_length[6]|max_length[60]'
        ];

        if ($this->validate($rules)) {
            $utenteModel = new UtentiModel();
            $data = [
                'username' => $this->request->getVar('register_username'),
                'password_hash' => password_hash($this->request->getVar('register_password'), PASSWORD_DEFAULT)
            ];

            if ($utenteModel->select()->where('username', $data['username'])->countAllResults() != 0) {
                session()->setFlashdata('register_username_error', 'existing username');
                session()->setFlashdata('register', 'doing registration');
                return redirect()->to('/login');
            }

            $utenteModel->save($data);

            // TODO da sistemare
            $ses_data = [
                'id'         => $utenteModel->select('id')->where('username', $data['username']),
                'username'   => $data['username'],
                'isLoggedIn' => true
            ];
            session()->set($ses_data);

            return redirect()->to('/tables');
        }
        else {
            $data['validation'] = $this->validator;
            echo view('login', $data);
        }
    }

    public function logout() {
        session()->destroy();

        return redirect()->to('/');
    }
}