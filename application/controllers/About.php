<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('About_m', 'models');
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
        $data['body'] = 'pages/private/admin/about';
        $data['static'] = $this->static();
        $data['seo_title'] = 'Dashboard';

        $this->load->view('main', $data);
    }
}
