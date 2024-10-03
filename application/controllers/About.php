<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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
        $data['body'] = 'pages/private/admin/about/index';
        $data['static'] = $this->static();
        $data['seo_title'] = 'About';

        $data['field'] = $this->models->fetc_where_data('tbl_about', 'id', 1);
        $this->load->view('main', $data);
    }

    public function update_data()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!empty($_FILES["images"]["name"])) {

                $config['upload_path'] = './assets/public/img/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|webp';
                $config['max_size'] = 1020; // 1MB

                $this->load->library('upload', $config);
                $this->upload->do_upload('images');
                $hasil = $this->upload->data();

                $config['source_image'] = 'assets/public/img/' . $hasil['file_name'];
                $config['wm_text'] = '';
                $config['wm_type'] = 'text';
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '26';
                $config['wm_font_color'] = 'ffffff';
                $config['wm_vrt_alignment'] = 'middle';
                $config['wm_hor_alignment'] = 'center';
                $config['wm_padding'] = '20';
                $this->load->library('image_lib', $config);
                $this->image_lib->watermark();


                if ($this->input->post('old_images') == true) {
                    $path = './assets/public/img/';
                    $filename = $this->input->post('old_images');
                    if (file_exists($path . $filename)) {
                        unlink($path . $filename);
                    }
                }

                $data = array(
                    'images' => $hasil['file_name'],
                    'title' => htmlspecialchars($this->input->post('title')),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
                    'link' => htmlspecialchars($this->input->post('link')),
                    'body' => $this->input->post('body'),
                );
            } else {
                $data = array(
                    'title' => htmlspecialchars($this->input->post('title')),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
                    'link' => htmlspecialchars($this->input->post('link')),
                    'body' => $this->input->post('body'),
                );
            }
            $update = $this->models->update(array('id' => 1), $data, 'tbl_about');
            echo json_encode($update);
        } else {
            $this->output->set_status_header(403);
            show_error('Url tidak di temukan');
        }
    }
}
