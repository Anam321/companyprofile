<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_m', 'models');
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
        $data['body'] = 'pages/public/builder/index';
        $data['static'] = $this->static();
        $data['title'] = 'website konstruksi';

        $data['slider'] = $this->models->fetc_all_data('tbl_slider');

        $this->load->view('main', $data);
    }
}
