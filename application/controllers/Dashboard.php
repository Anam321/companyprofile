<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_m', 'models');
        is_logged_in();
    }
    function static()
    {
        $data['header'] = 'pages/private/admin/header';
        $data['nav'] = 'pages/private/admin/nav';
        $data['footer'] = 'pages/private/admin/footer';
        return $data;
    }
    public function index()
    {
        $data['body'] = 'pages/private/admin/dashboard';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Dashboard';

        $this->load->view('main', $data);
    }
}
