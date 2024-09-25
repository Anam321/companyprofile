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
        $data['seo_title'] = 'website konstruksi';
        $data['seo_deskripsi'] = app('deskripsi');
        $data['seo_keyword'] = app('keyword');
        $data['robots'] = 'all, index, follow';

        $data['ogImages'] = base_url('assets/public/img/') . app('logo');
        $data['ogAlt'] = 'all, index, follow';


        $data['meta_service'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'SERVICE');
        $data['meta_patner'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'PATNER');
        $data['meta_fax'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'FAX');
        $data['meta_blog'] = $this->models->fetc_where_data('tbl_meta_pages', 'pages', 'BLOG');


        $data['slider'] = $this->models->fetc_all_data('tbl_slider');
        $data['feature'] = $this->models->fetc_all_data('tbl_feature');
        $data['about'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $data['service'] = $this->models->fetc_all_data_where('tbl_service', 'private', 0);
        $data['patner'] = $this->models->fetc_all_data('tbl_patner');
        $data['faxLeft'] = $this->models->fetc_all_data_where('tbl_fax', 'position', 'LEFT');
        $data['faxRight'] = $this->models->fetc_all_data_where('tbl_fax', 'position', 'RIGHT');
        $data['testimoni'] = $this->models->fetc_all_data('tbl_testimoni');
        $data['blog'] = $this->models->fetc_where_data_Where_limit('tbl_blog', 'private', 0, 6);
        $this->load->view('main', $data);
    }
}