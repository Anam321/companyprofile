<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    private $max_attempts = 3;
    private $lockout_time = 900; // 15 minutes
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m', 'models');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    function static()
    {
        $data['header'] = 'pages/public/builder/header';
        $data['nav'] = 'pages/public/builder/nav';
        $data['footer'] = 'pages/public/builder/footer';
        return $data;
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('app-admin/dashboard');
        } else {
            $ip_address = $this->input->ip_address();

            $limit_time = date('Y-m-d H:i:s', time() - $this->lockout_time);
            $attempts = $this->models->get_login_attemptsl($ip_address, $limit_time);
            if ($attempts >= $this->max_attempts) {
                $sess = 1;
            } else {
                $sess = 0;
            }
            $data['sess'] = $sess;
            $data['seo_title'] = 'Login |' . app('title');
            $this->load->view('pages/private/login/index', $data);
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');

            if ($this->form_validation->run() == FALSE) {
                $r = array(
                    'status' => '01',
                    'type' => 'error',
                    'mess' => 'Login Error, Priksa kmbali informasi login !',
                );
                echo json_encode($r);
            } else {
                if (htmlspecialchars($this->input->post('token', true)) != $this->session->csrf_token) {
                    $r = array(
                        'status' => '01',
                        'type' => 'error',
                        'mess' => 'Akses Tidak Di Ijinkan!',
                    );
                    echo json_encode($r);
                } else {

                    $username = htmlspecialchars($this->input->post('username', true));
                    $password = htmlspecialchars($this->input->post('password', true));


                    // Check login attempts
                    $limit_time = date('Y-m-d H:i:s', time() - $this->lockout_time);
                    $attempts = $this->models->get_login_attempts($username, $limit_time);
                    if ($attempts >= $this->max_attempts) {
                        $r = array(
                            'status' => '01',
                            'type' => 'error',
                            'mess' => 'Kamu 3 kali gagal login. Kembai lagi setelah 15 menit',
                        );
                        echo json_encode($r);
                    } else {
                        $user = $this->models->data_user($username);
                        if ($user && password_verify($password, $user['password'])) {
                            if ($user['status'] == 1) {

                                $data = [
                                    'username' => $user['username'],
                                    'role' => $user['role'],
                                ];
                                $this->session->set_userdata($data);
                                $r = array(
                                    'status' => '00',
                                    'type' => 'success',
                                    'mess' => 'Login Berhasil',
                                );
                                echo json_encode($r);
                            } else {
                                $r = array(
                                    'status' => '01',
                                    'type' => 'error',
                                    'mess' => 'Account Tidak aktif!',
                                );
                                echo json_encode($r);
                            }
                        } else {
                            $this->models->record_login_attempt($username);
                            $r = array(
                                'status' => '01',
                                'type' => 'error',
                                'mess' => 'Username atau password salah!...',
                            );
                            echo json_encode($r);
                        }
                    }
                }
            }
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }


    public function logout()
    {
        // hapus session
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        // redirect ke halaman login
        redirect('app-admin/login');
    }
}
